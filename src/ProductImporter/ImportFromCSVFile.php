<?php

namespace Acme\ProductImporter;

/**
 * This is controller
 */
final class ImportFromCSVFile
{

    public function __construct(
        private \Acme\ProductManagement\ProductManagement $productManagement

    ) {}

    public function importCsvFrom(string $path) {
        try {
            $resource = fopen($path);

            fgetcsv($resource);

            while ($row = fgetcsv($resource)) {
                $this->createProducts($row);
            }

        } catch (\Throwable $e) {
            //log every data possible until some better bulletproof solution will be implemented
        }
    }


    private function createProducts(...$attributes) {
        $product = new \Acme\ProductManagement\ProductDTO(
            $attributes[0],
            $attributes[1],
            $attributes[2],
            $attributes[3],
            $attributes[4],
            $attributes[5],
            $attributes[6],
            $attributes[7],
            $attributes[8],
            $attributes[9],
            $attributes[10],
            $attributes[11],
            $attributes[12],
            $attributes[13],
            $attributes[14],
            $attributes[15],
            $attributes[16],
            $attributes[17],
            $attributes[18],
            $attributes[19],
            $attributes[20],
            $attributes[21],
            $attributes[22],
            $attributes[23],
            $attributes[24],
            $attributes[25],
            $attributes[26],
            $attributes[27],
            $attributes[28],
            $attributes[29],
            $attributes[30],
            $attributes[31],
            $attributes[32],
            $attributes[33],
            $attributes[34],
            $attributes[35],
            $attributes[36],
            $attributes[37],
            $attributes[38],
            $attributes[39]
        );

        //current implementation is synchronous
        $this->productManagement->addProduct($product);

        //but there is pseudo code for asynchronous implementation with symfony messanger
        // $this->bus->dispatch(new AddProduct($product));

    }

}