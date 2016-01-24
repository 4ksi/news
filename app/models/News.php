<?php
class News extends Db
{

    public static function getNewsList()
    {
        $connect = Db::openConnection();
        $result = $connect->query('SELECT id, title, announce, created_at '
                . 'FROM news_db '
                . 'ORDER BY id DESC '
                . 'LIMIT 10');

        return $result;
    }

    public static function getNewsItemById($id)
    {
        $id = intval($id);

        if ($id) {
            $connect = Db::openConnection();
            $result = $connect->query('SELECT * '
                    . 'FROM news_db '
                    . 'WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    public static function deleteItem($id)
    {

    }

}
?>