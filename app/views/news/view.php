<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <h1 class="text-center text-uppercase"><?=$data['title'] ?>
                <small><?= $data['created_at'] ?></small>
            </h1>
        </div>
        <div class="row">

            <a class="btn btn-primary" href="/">Назад</a>

            <div class="btn-group pull-right">
                <a class="btn btn-default" href="/news/edit/<?=$data['id']?>">
                    <span class="glyphicon glyphicon-pencil">Изменить</span>
                </a>
                <a class="btn btn-default"  href="/news/delete/<?=$data['id']?>">
                    <span class="glyphicon glyphicon-remove">Удалить</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <p class="lead text-justify"><?= $data['full_news'] ?></p>
    </div>
</div>