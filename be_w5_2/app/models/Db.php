<?php
class Db
{
    public static $connection;
    public function __construct()
    {
        //Bước 1
        if (!self::$connection) {
            self::$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
            self::$connection->set_charset('utf8mb4');
        }
        return self::$connection;
    }
    public function select($mysql)
    {
        //Bước 3
        $items = [];
        $mysql->execute();
        $items = $mysql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}
