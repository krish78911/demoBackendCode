<?php

interface ProductSorter {
    public function getProducts();
}

class SortByPrice implements ProductSorter{

    public function __construct($products) { 
        $this->products = $products;
    }

    public function getProducts() {
        usort($this->products, function ($a, $b) {
            return $a["price"] - $b["price"];
        });
        return $this->products;
    }
}

class SortByRatio implements ProductSorter {

    public function __construct($products) { 
        $this->products = $products;
    }

    public function getProducts() {
        usort($this->products, function ($a, $b) {
            return ceil(($a["sales_count"]/$a["views_count"]) - ($b["sales_count"]/$b["views_count"])); 
        });
        return $this->products;
        
    }

}


$products = [
    [
       'id' => 1,
       'name' => 'Alabaster Table',
       'price' => 12.99,
       'created' => '2019-01-04',
       'sales_count' => 32,
       'views_count' => 730,
    ],
    [
       'id' => 2,
       'name' => 'Zebra Table',
       'price' => 44.49,
       'created' => '2012-01-04',
       'sales_count' => 301,
       'views_count' => 3279,
    ],
     [
       'id' => 3,
       'name' => 'Coffee Table',
       'price' => 10.00,
       'created' => '2014-05-28',
       'sales_count' => 1048,
       'views_count' => 20123,
    ]
 ];

 $catalog = new SortByPrice($products);
 $productsSortedByPrice = $catalog->getProducts();


 $catalog = new SortByRatio($products);
 $productsSortedByRatio = $catalog->getProducts();
