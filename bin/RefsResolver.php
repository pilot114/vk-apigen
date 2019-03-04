<?php

/**
 * TODO: класс для работы с $refs
 */
class RefsResolver
{
    public function getObjectName($inputNode)
    {
        $refName = str_replace('#/definitions/', '', $inputNode['$ref']);
        return str_replace('objects.json', '', $refName);
    }

    public function resolveObjectRef($inputNode, $collection)
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
    public function resolveRefs($refName, $responses, $objects)
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