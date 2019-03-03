<?php

use PhpParser\BuilderFactory;
use PhpParser\PrettyPrinter;
use PhpParser\Node;

class Printer
{
    protected $namespace;
    protected $factory;
    protected $prettyPrinter;

    public function __construct($namespace)
    {
        $this->namespace = $namespace;
        $this->factory = new BuilderFactory();
        $this->prettyPrinter = new PrettyPrinter\Standard();
    }

    public function apiPrint(array $methods)
    {
        $methods = $this->prepareMethods($methods);

        $methodsStatements = [];
        foreach ($methods as $method) {
            $method = (object)($method);

            if (!isset($methodsStatements[$method->domain])) {
                $methodsStatements[$method->domain] = $this->factory->method($method->domain)
                    ->makePublic()
                    ->setReturnType('Domain\\' . ucfirst($method->domain))
                    ->addStmt(new Node\Stmt\Return_(
                        new Node\Expr\New_(new Node\Name('Domain\\' . ucfirst($method->domain)), [
                            new Node\Arg(new Node\Expr\PropertyFetch(new Node\Expr\Variable('this'), 'client')),
                            new Node\Arg(new Node\Expr\PropertyFetch(new Node\Expr\Variable('this'), 'defaultQuery')),
                        ])
                    ));
            }
        }

        $node = $this->factory->namespace($this->namespace)
            ->addStmt($this->factory->use('GuzzleHttp\Client'))
            ->addStmt($this->factory->class('Api')
                ->addStmt(new Node\Stmt\ClassConst([
                    new Node\Const_('VERSION', new Node\Scalar\String_('5.80.1'))
                ]))
                ->addStmt(new Node\Stmt\Property(
                    Node\Stmt\Class_::MODIFIER_PROTECTED, [
                        new Node\Stmt\PropertyProperty('client')
                    ]
                ))
                ->addStmt(new Node\Stmt\Property(
                    Node\Stmt\Class_::MODIFIER_PROTECTED, [
                        new Node\Stmt\PropertyProperty('defaultQuery')
                    ]
                ))
                ->addStmt($this->factory->method('__construct')
                    ->makePublic()
                    ->addParam($this->factory->param('accessToken')->setType('string'))
                    ->addStmt(new Node\Expr\Assign(
                        new Node\Expr\PropertyFetch(
                            new Node\Expr\Variable('this'), 'defaultQuery'
                        ),
                        new Node\Expr\Array_([
                            new PhpParser\Node\Expr\ArrayItem(
                                new Node\Expr\ClassConstFetch(
                                    new Node\Name('self'),
                                    'VERSION'
                                ),
                                new Node\Scalar\String_('v')
                            ),
                            new PhpParser\Node\Expr\ArrayItem(
                                new Node\Expr\Variable('accessToken'),
                                new Node\Scalar\String_('access_token')
                            ),
                        ])
                    ))
                    ->addStmt(new Node\Expr\Assign(
                        new Node\Expr\PropertyFetch(
                            new Node\Expr\Variable('this'), 'client'
                        ),
                        new Node\Expr\New_(new Node\Name('Client'), [
                            new PhpParser\Node\Arg(
                                new Node\Expr\Array_([
                                    new Node\Expr\ArrayItem(
                                        new Node\Scalar\String_('https://api.vk.com/method/'),
                                        new Node\Scalar\String_('base_uri')
                                    )
                                ])
                            )
                        ])
                    ))
                )
                ->addStmts($methodsStatements)
            )
            ->getNode();
        return $this->prettyPrinter->prettyPrintFile([$node]);
    }

    public function domainsPrint(array $methods)
    {
        $methods = $this->prepareMethods($methods);

        $domainsStatements = [];
        foreach ($methods as $method) {
            $method = (object)($method);

            if (!isset($domainsStatements[$method->domain])) {
                $domainsStatements[$method->domain] = [];
            }

            $domainsStatements[$method->domain][] = $this->factory->method($method->name)
                ->makePublic()
                ->setReturnType('Method\\' . ucfirst($method->domain) . '_' . ucfirst($method->name))
                ->addStmt(new Node\Stmt\Return_(
                    new Node\Expr\New_(new Node\Name('Method\\' . ucfirst($method->domain) . '_' . ucfirst($method->name)), [
                        new Node\Arg(new Node\Expr\PropertyFetch(new Node\Expr\Variable('this'), 'client')),
                        new Node\Arg(new Node\Expr\PropertyFetch(new Node\Expr\Variable('this'), 'defaultQuery')),
                    ])
                ));
        }

        $results = [];
        foreach ($domainsStatements as $domainName => $domainStatements) {
            $node = $this->factory
                ->namespace($this->namespace . '\Domain')
                ->addStmt($this->factory->use($this->namespace . '\Method'))
                ->addStmt($this->factory->class(ucfirst($domainName))
                    ->addStmt(new Node\Stmt\Property(
                        Node\Stmt\Class_::MODIFIER_PROTECTED, [
                            new Node\Stmt\PropertyProperty('client')
                        ]
                    ))
                    ->addStmt(new Node\Stmt\Property(
                        Node\Stmt\Class_::MODIFIER_PROTECTED, [
                            new Node\Stmt\PropertyProperty('defaultQuery')
                        ]
                    ))
                    ->addStmt($this->factory->method('__construct')
                        ->makePublic()
                        ->addParam($this->factory->param('client'))
                        ->addParam($this->factory->param('defaultQuery'))
                        ->addStmt(new Node\Expr\Assign(
                            new Node\Expr\PropertyFetch(
                                new Node\Expr\Variable('this'), 'client'
                            ),
                            new Node\Expr\Variable('client')
                        ))
                        ->addStmt(new Node\Expr\Assign(
                            new Node\Expr\PropertyFetch(
                                new Node\Expr\Variable('this'), 'defaultQuery'
                            ),
                            new Node\Expr\Variable('defaultQuery')
                        ))
                    )
                    ->addStmts($domainStatements)
                )
                ->getNode();
            $results[ucfirst($domainName)] = $this->prettyPrinter->prettyPrintFile([$node]);
        }
        return $results;
    }

    public function methodsPrint(array $methods, array $responses, array $objects)
    {
        $methods = $this->prepareMethods($methods);

        $results = [];
        foreach ($methods as $method) {
            $method = (object)($method);

            $class = $this->factory->class(ucfirst($method->domain) . '_' . ucfirst($method->name))
                ->extend(sprintf('\%s\BaseMethod', $this->namespace))
                ->addStmt(new Node\Stmt\Property(
                    Node\Stmt\Class_::MODIFIER_PROTECTED,
                    [
                        new Node\Stmt\PropertyProperty('params', new Node\Expr\Array_([]))
                    ]
                ));

            $description = isset($method->description) ? $method->description : 'not description';
            $class->setDocComment(
                sprintf('/**
                  * %s
                  */',
                    $description
                )
            );

            $isOpen = isset($method->open) ? 'true' : 'false';
            $class->addStmt($this->factory->method('isOpen')
                ->makePublic()
                ->setReturnType('bool')
                ->addStmt(new Node\Stmt\Return_(
                    new Node\Expr\ConstFetch(new Node\Name($isOpen))
                ))
            );

            $class->addStmt($this->factory->method('__construct')
                ->makePublic()
                ->addParam($this->factory->param('client'))
                ->addParam($this->factory->param('defaultQuery'))
                ->addStmt(new Node\Expr\StaticCall(
                    new Node\Name('parent'),
                    '__construct',
                    [
                        new Node\Arg(new Node\Expr\Variable('client')),
                        new Node\Arg(new Node\Expr\Variable('defaultQuery')),
                    ]
                ))
            );

            $class->addStmt($this->factory->method('call')
                ->makePublic()
                ->addStmt(new Node\Stmt\Return_(new Node\Expr\MethodCall(
                    new Node\Expr\Variable('this'),
                    'onCall',
                    [
                        new Node\Arg(new Node\Scalar\String_($method->domain . '.' . $method->name)),
                    ]
                )))
            );

            // TODO: add POST support for tipical upload flow

            // TODO: add optional errors
            //    if (isset($method->errors)) {
            //        var_dump($method->errors);
            //        die();
            //    }

            // TODO сначала билдим описания объектов, убирая ссылки, затем уже генерим объекты
            // если ответов несколько - комбинируем в один с isMutual() -> true
            //foreach ($method->responses as $nameResponse => $response) {
            //    $response = $this->resolveRefs($response['$ref'], $responses, $objects);
            //}

            if (isset($method->parameters)) {

                $parameters = [];
                foreach ($method->parameters as $parameter) {
                    $parameter = (object)($parameter);

                    $name = $parameter->name;
                    $nameUnderscore = isset($parameter->required) && $parameter->required ? $parameter->name : '_' . $parameter->name;
                    $description = isset($parameter->description) ? $parameter->description : 'not description';

                    // fix typing for php
                    if ($parameter->type === 'number') {
                        $parameter->type = 'float';
                    }
                    if ($parameter->type === 'integer') {
                        $parameter->type = 'int';
                    }
                    if ($parameter->type === 'boolean') {
                        $parameter->type = 'bool';
                    }

                    unset($parameter->required);
                    unset($parameter->name);
                    unset($parameter->description);

                    // build doc-block with metadata
                    $docBlock = sprintf(
                        '/**
                   * %s
                   *
                   * %s
                   */',
                        $description,
                        json_encode($parameter)
                    );

                    $parameters[] = $this->factory->method($nameUnderscore)
                        ->setDocComment($docBlock)
                        ->makePublic()
                        ->addParam($this->factory->param($name)->setType($parameter->type))
                        ->setReturnType(ucfirst($method->domain) . '_' . ucfirst($method->name))
                        ->addStmt(
                            new Node\Expr\Assign(
                                new Node\Expr\ArrayDimFetch(
                                    new Node\Expr\PropertyFetch(
                                        new Node\Expr\Variable('this'),
                                        'params'
                                    ),
                                    new Node\Scalar\String_($name)
                                ),
                                new Node\Expr\Variable($name)
                            )
                        )
                        ->addStmt(new Node\Stmt\Return_(
                            new Node\Expr\Variable('this')
                        ));
                }
                $class->addStmts($parameters);
            }

            $node = $this->factory
                ->namespace($this->namespace . '\Method')
                ->addStmt($class)
                ->getNode();

            $results[ucfirst($method->domain) . '_' . ucfirst($method->name)] = $this->prettyPrinter->prettyPrintFile([$node]);
        }
        return $results;
    }


    protected function prepareMethods($methods)
    {
        foreach ($methods as $i => $method) {
            [$methodDomain, $methodName] = explode('.', $method['name']);
            $methods[$i]['name'] = $methodName;
            $methods[$i]['domain'] = $methodDomain;
        }
        return $methods;
    }

    protected function getObjectName($inputNode)
    {
        $refName = str_replace('#/definitions/', '', $inputNode['$ref']);
        return str_replace('objects.json', '', $refName);
    }

    protected function resolveObjectRef($inputNode, $collection)
    {
        $refName = $this->getObjectName($inputNode);
        return $collection[$refName] ?? null;
    }

    /**
     * Собираем описание объекта ответа, "раскрывая" вложенные ссылки
     * Кусок сложный, но цель простая - заменить все $ref на соотвествующие описания
     *
     * @param $refName
     * @param $responses
     * @param $objects
     */
    protected function resolveRefs($refName, $responses, $objects)
    {
        $refName = str_replace('responses.json#/definitions/', '', $refName);
        $response = $responses[$refName]['properties']['response'] ?? null;

        if (isset($response['$ref'])) {
            $response = $this->resolveObjectRef(
                $response,
                $objects
            );
        }

        if (isset($response['items'])) {
            if (isset($response['items']['$ref'])) {
                $response['items'] = $this->resolveObjectRef(
                    $response['items'],
                    $objects
                );
            }

            if (isset($response['items']['oneOf'])) {
                foreach ($response['items']['oneOf'] as $i => $item) {
                    if (isset($response['items']['oneOf'][$i]['$ref'])) {
                        $response['items']['oneOf'][$i] = $this->resolveObjectRef(
                            $response['items']['oneOf'][$i],
                            $objects
                        );
                    }
                }
            }

            if (isset($response['items']['allOf'])) {
                foreach ($response['items']['allOf'] as $i => $item) {
                    if (isset($response['items']['allOf'][$i]['$ref'])) {
                        $response['items']['allOf'][$i] = $this->resolveObjectRef(
                            $response['items']['allOf'][$i],
                            $objects
                        );
                    }
                }
            }
        }

        if (isset($response['properties'])) {
            foreach ($response['properties'] as $propertyName => $property) {

                if (isset($property['$ref'])) {
                    $response['properties'][$propertyName] = $this->resolveObjectRef(
                        $response['properties'][$propertyName],
                        $objects
                    );
                }

                if (isset($property['items'])) {
                    if (isset($property['items']['$ref'])) {
                        $response['properties'][$propertyName]['items'] = $this->resolveObjectRef(
                            $response['properties'][$propertyName]['items'],
                            $objects
                        );
                    }

                    if (isset($property['items']['oneOf'])) {
                        foreach ($property['items']['oneOf'] as $i => $item) {
                            if (isset($property['items']['oneOf'][$i]['$ref'])) {
                                $response['properties'][$propertyName]['items']['oneOf'][$i] = $this->resolveObjectRef(
                                    $response['properties'][$propertyName]['items']['oneOf'][$i],
                                    $objects
                                );
                            }
                        }
                    }

                    if (isset($property['items']['allOf'])) {
                        foreach ($property['items']['allOf'] as $i => $item) {
                            if (isset($property['items']['allOf'][$i]['$ref'])) {
                                $response['properties'][$propertyName]['items']['allOf'][$i] = $this->resolveObjectRef(
                                    $response['properties'][$propertyName]['items']['allOf'][$i],
                                    $objects
                                );
                            }
                        }
                    }
                }
            }
        }

        return $response;
    }
}