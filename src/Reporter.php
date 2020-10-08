<?php

namespace Sujan\Reporter;

use Sujan\Reporter\Services\CoreServiceFactory;
use Sujan\Reporter\Services\CSVService;
use Sujan\Reporter\Services\PDFService;

/**
 * Class Reporter
 * @package Sujan\Exporter
 *
 * @property PDFService $pdf
 * @property CSVService $csv
 */
class Reporter
{
    /**
     * @var CoreServiceFactory
     */
    private $coreServiceFactory;

    public function __get($name)
    {
        if (null === $this->coreServiceFactory) {
            $this->coreServiceFactory = new CoreServiceFactory();
        }

        return $this->coreServiceFactory->__get($name);
    }
}
