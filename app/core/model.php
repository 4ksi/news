<?php
abstract class Model
{
    protected static function open_connection()
    {
        $host       = 'localhost';
        $database   = 'postgres';
        $user       = 'postgres';
        $password   = '1212';
        $connect    = new PDO("pgsql:host=$host;dbname=$database", $user, $password);

        return $connect;
    }

    protected static function close_connection($connect)
    {
        $connect = null;
    }

    abstract function get();
}
?>