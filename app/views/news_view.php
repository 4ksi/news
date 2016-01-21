<div class="page-header">
    <h1 class="text-center">Последние новости</h1>
</div>
<div class="container-fluid">
    <?php foreach($data as $row): ?>
            <div class='row'>
                <h2 class='text-uppercase'><?= $row['title'] ?>
                    <small><?= $row['created_at'] ?></small>
                </h2>
            </div>

            <div class='row'>
                <p class='lead text-justify'><?= $row['announce'] ?></p>
            </div>

            <div class='row'>
                <div class='btn-group' role='group'>
                    <button type='button' class='btn btn-default'>EDIT</button>
                    <button type='button' class='btn btn-default'>DELETE</button>
                </div>
            </div>
    <?php endforeach ?>
</div>