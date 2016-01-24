<div class="container-fluid">
    <div class='page-header'>
        <div class="row">
            <a class="btn btn-primary" href="/news/">Назад</a>
        </div>
    </div>
    <div class="row">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="inputTitle">Заголовок
                    <input id="inputTitle" name="title" type="text" class="form-control" size="60" maxlength="60" value="<?= $data['title']?>">
                </label>
            </div>
            <div class="form-group">
                <label for="inputAnnounce">Анонс
                    <textarea id="inputAnnounce" name="announce" class="form-control" maxlength="500" rows="4" cols="60"><?= $data['announce'] ?></textarea>
                </label>
            </div>
            <div class="form-group">
                <label for="inputFullNews">Полная новость
                    <textarea id="inputFullNews" name="full_news" class="form-control" rows="7" cols="80"><?= $data['full_news'] ?></textarea>
                </label>
            </div>
            <button type="submit" name="submit" class="btn btn-default">Добавить</button>
        </form>
    </div>
</div>