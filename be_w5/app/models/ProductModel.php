<?php
class ProductModel extends Db{
    public function getProduct()
    {
        $mysql= parent::$connection->prepare("SELECT * FROM products");
        return parent::select($mysql);
    }
  
}