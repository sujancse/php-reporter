<?php


namespace Sujan\Reporter\Services;


/**
 * Class CoreServiceFactory
 *
 * @property PDFService $pdf
 * @property CSVService $csv
 */
class CoreServiceFactory extends AbstractServiceFactory
{
    private static $classMap = [
        'pdf' => PDFService::class,
        'csv' => CSVService::class
    ];

    protected function getServiceClass(string $name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
