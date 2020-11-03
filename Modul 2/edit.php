<?php
$page='edit'; 
include 'header.php';
require 'mc_menu.php';
$menu = query("SELECT * FROM menu");
?>


<body>
<?php foreach($menu as $row): ?>
<div class="container">

<div class="row ">
<div class="card mb-8" style="max-width: 1400px;">
<div class="row no-gutters">


<div class="col-md-4">
<img src="asset/img/<?= $row ["m_gambar"]; ?>" class="card-img">
</div>
<div class="col-md-8">

<div class="card-body">
    <h5 class="card-title"><?= $row["m_namamakanan"]; ?> </h5>
    <p class="card-text">
    Harga : <?= $row["m_harga"]; ?> <br>
    <?= $row["m_descmakanan"]; ?>
    </p>
    <a href="update.php?m_id=<?=$row["m_id"];?>"><button type="button" class="btn btn-primary" >update</button></a>
    <a href="makanan_delete.php?m_id=<?=$row["m_id"];?>"><button type="button" class="btn btn-danger">delete</button></a>
</div>

</div>
</div>
</div>
    
</div>
</div>
<?php endforeach;?>






</body>


<?php 
require 'footer.php';
?>
</html>