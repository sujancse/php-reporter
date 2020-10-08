<?php


namespace Sujan\Reporter\Services;


abstract class BaseService
{
    abstract public function build();
    abstract public function export();
}
