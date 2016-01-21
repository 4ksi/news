<div class="container-fluid">
    <div class="row">
        <h1 class="text-center">Последние новости</h1>
    </div>
</div>
<div class="container-fluid">
  
    ...
  
<?php
    foreach($data as $row) {
        echo "<div class='row'><h3>{$row['Title']} <small>{$row['Date']}</small></h3></div>";
        echo "<div class='row'> {$row['Anounce']} </div>";
    }
?>
</div>