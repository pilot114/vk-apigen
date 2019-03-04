<?php

use PhpParser\BuilderFactory;
use PhpParser\PrettyPrinter;
use PhpParser\Node;

class Printer
{
    protected $namespace;
    protected $apiVersion;
    protected $factory;
    protected $prettyPrinter;

    public function __construct($namespace, $apiVersion)
    {
        $this->namespace = $namespace;
        $this->apiVersion = $apiVersion;
        $this->factory = new BuilderFactory();
        $this->prettyPrinter = new PrettyPrinter\Standard(['shortArraySyntax' => true]);
    }

    public function apiPrint(array $methods)
    {
        $methods = $this->prepareMethods($methods);

        $domains = array_unique(array_column($methods, 'domain'));

        $methodsStatements = [];
        foreach ($domains as $domain) {
            $methodsStatements[$domain] = $this->factory->method($domain)
                ->makePublic()
                ->setReturnType('Domain\\' . ucfirst($domain))
                ->addStmt(new Node\Stmt\Return_(
                    new Node\Expr\New_(new Node\Name('Domain\\' . ucfirst($domain)), [
                        new Node\Arg(new Node\Expr\PropertyFetch(new Node\Expr\Variable('this'), 'client')),
                        new Node\Arg(new Node\Expr\PropertyFetch(new Node\Expr\Variable('this'), 'defaultQuery')),
                        new Node\Arg(new Node\Expr\PropertyFetch(new Node\Expr\Variable('this'), 'accessTokenType')),
                    ])
                ));
        }

        $node = $this->factory->namespace($this->namespace)
            ->addStmt($this->factory->use('GuzzleHttp\Client'))
            ->addStmt($this->factory->class('Api')
                ->addStmt(new Node\Stmt\ClassConst([
                    new Node\Const_('VERSION', new Node\Scalar\String_($this->apiVersion))
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
                ->addStmt(new Node\Stmt\Property(
                    Node\Stmt\Class_::MODIFIER_PROTECTED, [
                        new Node\Stmt\PropertyProperty('accessTokenType')
                    ]
                ))
                ->addStmt($this->factory->method('__construct')
                    ->makePublic()
                    ->addParam($this->factory->param('accessToken')->setType('string'))
                    ->addParam($this->factory->param('accessTokenType')->setType('string')->setDefault(null))
                    ->addStmt(new Node\Expr\Assign(
                        new Node\Expr\PropertyFetch(
                            new Node\Expr\Variable('this'), 'accessTokenType'
                        ),
                        new Node\Expr\Variable('accessTokenType')
                    ))
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
                ->setReturnType('Method\\' . ucfirst($method->domain) . '\\' . ucfirst($method->name))
                ->addStmt(new Node\Stmt\Return_(
                    new Node\Expr\New_(new Node\Name('Method\\' . ucfirst($method->domain) . '\\' . ucfirst($method->name)), [
                        new Node\Arg(new Node\Expr\PropertyFetch(new Node\Expr\Variable('this'), 'client')),
                        new Node\Arg(new Node\Expr\PropertyFetch(new Node\Expr\Variable('this'), 'defaultQuery')),
                        new Node\Arg(new Node\Expr\PropertyFetch(new Node\Expr\Variable('this'), 'accessTokenType')),
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
                    ->addStmt(new Node\Stmt\Property(
                        Node\Stmt\Class_::MODIFIER_PROTECTED, [
                            new Node\Stmt\PropertyProperty('accessTokenType')
                        ]
                    ))
                    ->addStmt($this->factory->method('__construct')
                        ->makePublic()
                        ->addParam($this->factory->param('client'))
                        ->addParam($this->factory->param('defaultQuery'))
                        ->addParam($this->factory->param('accessTokenType')->setType('string')->setDefault(null))
                        ->addStmt(new Node\Expr\Assign(
                            new Node\Expr\PropertyFetch(
                                new Node\Expr\Variable('this'), 'accessTokenType'
                            ),
                            new Node\Expr\Variable('accessTokenType')
                        ))
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

            $class = $this->factory->class(ucfirst($method->name))
                ->extend(sprintf('\%s\BaseMethod', $this->namespace))
                ->addStmt(new Node\Stmt\Property(
                    Node\Stmt\Class_::MODIFIER_PROTECTED,
                    [
                        new Node\Stmt\PropertyProperty('params', new Node\Expr\Array_([]))
                    ]
                ))
                ->addStmt(new Node\Stmt\Property(
                    Node\Stmt\Class_::MODIFIER_PROTECTED, [
                        new Node\Stmt\PropertyProperty('accessTokenType')
                    ]
                ));

            $description = isset($method->description) ? $method->description : 'Нет описания';
            $class->setDocComment(
                sprintf('/**
                  * %s
                  */',
                    $description
                )
            );

            $class->addStmt($this->factory->method('__construct')
                ->makePublic()
                ->addParam($this->factory->param('client'))
                ->addParam($this->factory->param('defaultQuery'))
                ->addParam($this->factory->param('accessTokenType')->setType('string')->setDefault(null))
                // TODO проверка, что выбран подходящий тип токена
                /*
                $availableTypes = [_];
                if (!in_array($accessTokenType, $availableTypes)) {
                    throw new \Exception('Неверный тип токена доступа ("%s") для метода %s', $accessTokenType, _);
                }

                ->addStmt(new Node\Expr\Assign(
                    new Node\Expr\ArrayDimFetch(
                        new Node\Expr\PropertyFetch(
                            new Node\Expr\Variable('this'),
                            'params'
                        ),
                        new Node\Scalar\String_()
                    ),
                    new Node\Expr\Variable('availableTypes')
                ))
                */
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

            /**
             * параметры метода, c подчеркивания начинаются опциональные
             */
            if (isset($method->parameters)) {

                $parameters = [];
                foreach ($method->parameters as $parameter) {
                    $parameter = (object)($parameter);

                    $name = $parameter->name;
                    $nameUnderscore = isset($parameter->required) && $parameter->required ? $parameter->name : '_' . $parameter->name;
                    $description = !empty($parameter->description) ? $parameter->description : 'Нет описания';

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
                        ->setReturnType('self')
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
                ->namespace(sprintf('%s\Method\%s', $this->namespace, ucfirst($method->domain)))
                ->addStmt($class)
                ->getNode();

            $results[ucfirst($method->domain) . '_' . ucfirst($method->name)] = $this->prettyPrinter->prettyPrintFile([$node]);
        }
        return $results;
    }

    /**
     * Разделяем собственно имя метода и имя раздела (домена), в который входит метод
     */
    protected function prepareMethods($methods)
    {
        foreach ($methods as $i => $method) {
            [$methodDomain, $methodName] = explode('.', $method['name']);
            $methods[$i]['name'] = $methodName;
            $methods[$i]['domain'] = $methodDomain;
        }
        return $methods;
    }
}