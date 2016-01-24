<?php
class Db
{
    protected static function openConnection()
    {
        $host       = 'localhost';
        $database   = 'postgres';
        $user       = 'postgres';
        $password   = '1212';

        $connect = new PDO("pgsql:host=$host;dbname=$database", $user, $password);

        return $connect;
    }

    protected static function closeConnection($connect)
    {
        return $connect = null;
    }
}