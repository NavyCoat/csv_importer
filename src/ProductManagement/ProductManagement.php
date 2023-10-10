<?php

namespace Acme\ProductManagement;

/**
 * Interface is here because this is the part of the system
 * which we decided to be more stable and less prone to changes
 * in our last architecture review
 */
interface ProductManagement
{
    public function addProduct(ProductDTO $product): void;
    //validation stuff like that, only valid product will be created
}