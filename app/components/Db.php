<?php
class Db
{
    protected static function openConnection()
    {
        $host       = 'localhost';
        $database   = 'postgres';
        $user       = 'postgres';
        $password   = '1212';

        try {
            $connect = new PDO("pgsql:host=$host;dbname=$database", $user, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        }
        catch (PDOException $e) {
            echo "Code: {$e->getCode()} <br>
                  Error Message: {$e->getMessage()} <br>";
        }
    }

    protected static function closeConnection($connect)
    {
        return $connect = null;
    }
}