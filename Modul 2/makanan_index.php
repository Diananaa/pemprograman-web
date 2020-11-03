<?php 
require 'mc_menu.php';
$menu = query("SELECT * FROM menu");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>
</head>
<body>
<h1>Admin Menu</h1>
<a href="makanan_insert.php">tambah Menu</a>
<br>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No. </th>
        <th>Nama Makanan</th>
        <th>harga</th>
        <th>deskripsi</th>
        <th>gambar</th>
        <th>action</th>
    </tr>

    <?php $i=1; ?>
    <?php foreach($menu as $row): ?>
        <tr>
            <td><?=$i ?></td>
            <td>
                <?= $row["m_namamakanan"]; ?>
            </td>
            <td>
                <?= $row["m_harga"]; ?>
            </td>
            <td>
                <?= $row["m_descmakanan"]; ?>
            </td>
            <td>
                <img src="asset/img/<?= $row ["m_gambar"]; ?>" width="50">
            </td>
            <td>
                <a href="makanan_update.php?m_id=<?=$row["m_id"];?>">Update | </a>

                <a href="makanan_delete.php?m_id=<?=$row["m_id"];?>">hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach;?>

</table>
</body>
</html>