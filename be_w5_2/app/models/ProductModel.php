<?php
class ProductModel extends Db{
    public function getProducts()
    {
        $mysql= parent::$connection->prepare("SELECT * FROM products");
        return parent::select($mysql);
    }
    public function getID($id)
    {
        $mysql= parent::$connection->prepare("SELECT * FROM products WHERE id=?");
        $mysql->bind_param('i',$id);
        return parent::select($mysql)[0];
    }
}