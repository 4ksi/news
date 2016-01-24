<?php
class News extends Db
{

    public static function getNewsList()
    {
        $connect = Db::openConnection();
        if ($connect) {
            $result = $connect->query('SELECT id, title, announce, created_at '
                . 'FROM news '
                . 'ORDER BY id DESC '
                . 'LIMIT 10');

            return $result;
        }

    }

    public static function getNewsItemById($id)
    {
        $id = intval($id);

        if ($id) {
            $connect = Db::openConnection();
            $result = $connect->query('SELECT * FROM news WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    public static function editNewsById($id, $options)
    {
        $connect = Db::openConnection();
        $query = 'UPDATE news
                  SET
                      title = :title,
                      announce = :announce,
                      full_news = :full_news
                  WHERE id = :id';

        $result = $connect->prepare($query);
        $result->bindParam(':id',        $id);
        $result->bindParam(':title',     $options['title']);
        $result->bindParam(':announce',  $options['announce']);
        $result->bindParam(':full_news', $options['full_news']);

        return $result->execute();
    }

    public static function deleteItem($id)
    {
        if ($id) {
            $connect = Db::openConnection();
            $query = "DELETE FROM news WHERE id = :id";
            $result = $connect->prepare($query);
            $result->bindParam(':id', $id);

            return $result->execute();
        }
    }
}
?>