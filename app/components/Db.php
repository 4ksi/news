<?php
class Db
{
    protected static function openConnection()
    {
        $host       = 'localhost';
        $database   = 'news';
        $user       = 'root';
        $password   = 'qwerty';

        try {
            $connect = new PDO("mysql:host=$host;dbname=$database", $user, $password);
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