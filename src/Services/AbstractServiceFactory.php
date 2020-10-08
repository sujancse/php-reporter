<?php

namespace Sujan\Reporter\Services;

abstract class AbstractServiceFactory
{
    private $services;

    public function __construct()
    {
        $this->services = [];
    }

    /**
     * @param string $name
     *
     * @return null|string
     */
    abstract protected function getServiceClass(string $name);

    /**
     * @param string $name
     *
     * @return null|AbstractServiceFactory
     */
    public function __get(string $name)
    {
        // Get service class
        $serviceClass = $this->getServiceClass($name);

        // Instantiate service class
        if (null !== $serviceClass) {
            if (!\array_key_exists($name, $this->services)) {
                $this->services[$name] = new $serviceClass();
            }

            return $this->services[$name];
        }

        \trigger_error('Undefined property: ' . static::class . '::$' . $name);

        return null;
    }
}
