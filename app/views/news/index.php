<div class='container-fluid'>
    <div class='page-header'>
        <h1 class='text-center'>Последние новости</h1>
    </div>
    <div class='container-fluid'>
        <?php foreach ($data as $newsItem): ?>
            <div class='row'>
                <h2 class='text-uppercase'>
                    <a href="/news/view/<?=$newsItem['id']?>"><?= $newsItem['title'] ?></a>
                    <small><?= $newsItem['created_at'] ?></small>
                </h2>
            </div>

            <div class='row'>
                <p class='lead text-justify'><?= $newsItem['announce'] ?><a href="/news/view/<?=$newsItem['id']?>">...continue</a></p>
            </div>

            <div class='row'>
                <div class='btn-group' role='group'>
                    <button type='button' class='btn btn-default'>
                        <a href="edit/<?= $newsItem['id'] ?>">EDIT</a>
                    </button>
                    <button type='button' class='btn btn-default'>
                        <a href="delete/<?= $newsItem['id'] ?>">DELETE</a>
                    </button>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>