<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/styles.css">
    <title>NEWZ</title>
</head>
<body>
    <header>
        <ul class="nav nav-tabs nav-justified">
            <li>
                <a href="/news"><span class="glyphicon glyphicon-home"></span> Главная</a>
            </li>
            <li>
                <a href="/about"><span class="glyphicon glyphicon-question-sign"></span> сайте</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <?php include 'app/views/'.$content_view; ?>
    </div>
</body>
</html>