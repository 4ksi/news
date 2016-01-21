<div class="page-header">
    <h1 class="text-center">Последние новости</h1>
</div>
<div class="container-fluid">
<?php
    foreach($data as $row) {
        echo "<div class='row'><h2 class='text-uppercase'>{$row['Title']} <small>{$row['Date']}</small></h3></div>";
        echo "<div class='row'><p class='lead text-justify'> {$row['Anounce']} </p></div>";
        echo "<div class='btn-group' role='group'>";
        echo "<button type='button' class='btn btn-default'>EDIT</button>";
        echo "<button type='button' class='btn btn-default'>DELETE</button>";
        echo "</div>";
    }
?>
</div>