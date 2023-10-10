<?php

namespace Acme\Tests;

use PHPUnit\Framework\TestCase;

class ImportUsingCSVTestCase extends TestCase
{
    public function testImportFromCsv()
    {
        $spyImplementation = new SpyProductManagement();

        $importer = new \Acme\ProductImporter\ImportFromCSVFile($spyImplementation);
        $importer->importCsvFrom(__DIR__ . '/products.csv');

        $this->assertTrue($spyImplementation->wasAdded());
    }
}

class SpyProductManagement implements \Acme\ProductManagement\ProductManagement
{
    private bool $added = false;

    public function addProduct(\Acme\ProductManagement\ProductDTO $product)
    {
        //do nothing
    }

    public function wasAdded(): bool
    {
        return $this->added;
    }
}
