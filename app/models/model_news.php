<?php
class Model_News extends Model
{
    public function get()
    {
        $connect = self::open_connection();
        $result = $connect->query('SELECT id, title, announce, created_at '
                . 'FROM news_db');

        return $result;

        self::close_connection($connect);
    }
}
?>