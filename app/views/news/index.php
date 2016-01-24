<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <h1 class="text-center">Последние новости</h1>
        </div>
    </div>
    <?php foreach ($data as $newsItem): ?>
        <div class="row">
            <h2 class="text-uppercase">
                <a href="/news/view/<?=$newsItem['id']?>"><?= $newsItem['title'] ?></a>
                <small><?= $newsItem['created_at'] ?></small>
            </h2>
        </div>

        <div class="row">
            <p class="lead text-justify"><?= $newsItem['announce'] ?> ...</p>
        </div>

        <div class="'row">
            <div class="btn-group" role="group">
                <a class="btn btn-default" href="/news/edit/<?= $newsItem['id'] ?>">
                    EDIT
                </a>
                <a class="btn btn-default" href="/news/delete/<?= $newsItem['id'] ?>">
                    DELETE
                </a>
            </div>
        </div>
    <?php endforeach ?>

    <div class="pull-right">
        <a style="position:fixed; right: 100px; bottom:30px;" href="/news" class="btn btn-success">Добавить новость</a>
    </div>
</div>