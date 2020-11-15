<?php
class CategoriesModel extends Db{
    public function getCategories()
    {
        $mysql= parent::$connection->prepare("SELECT * FROM categories");
        return parent::select($mysql);
    }
  
}