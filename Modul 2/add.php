<?php 
$page='add'; 
include 'header.php';

require 'mc_menu.php';
if(isset($_POST["tambah"])){
    if(tambahMenu($_POST)>0){
        echo "<script>
        alert('Menu berhasil ditambahkan')
    </script>";
    }else{
        echo mysqli_error($conn);
    }
}
?>


<div class="container">
<form action="" method="post" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="m_namamakanan">Nama Makanan</label>
        <input type="text" class="form-control" id="m_namamakanan" placeholder="Nama Makanan" name="m_namamakanan">
    </div>

    <div class="form-group">
        <label for="m_harga">Harga</label>
        <input type="text" class="form-control" id="m_harga" placeholder="Harga" name="m_harga">
    </div>

    <div class="form-group">
        <label for="m_descmakanan">Deskripsi</label>
        <input type="text" class="form-control" id="m_descmakanan" placeholder="Deskripsi" name="m_descmakanan">
    </div>

    <div class="form-group">
        <label for="m_gambar">Gambar</label>
        <input type="file" class="form-control" id="m_gambar" placeholder="Gambar" name="m_gambar">
    </div>

    <button type="submit" name="tambah" class="btn btn-info">Add</button>
</form>
</div>




</body>

<?php 
require 'footer.php';
?>
</html>