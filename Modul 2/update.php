<?php 
$page='add'; 
include 'header.php';

require 'mc_menu.php';
$m_id= $_GET["m_id"];

$menu = query("SELECT * from menu WHERE m_id= $m_id ") [0];

if(isset($_POST["submit"])){
    if(updateMenu($_POST)>0){
		echo "
		<script>
			alert('data berhasil diubah');
			document.location.href ='makanan_index.php';
			</script>
	   ";
    }else{
		echo "data gagal diubah";
	}
	

}


?>


<div class="container">
<form action="" method="post" enctype="multipart/form-data" >
<input type="hidden" name ="m_id" value="<?= $menu["m_id"]; ?>">
				
 <input type="hidden" name="m_gambarLama" value="<?= $menu["m_gambar"]; ?>">
    <div class="form-group">
        <label for="m_namamakanan">Nama Makanan</label>
        <input type="text" class="form-control" id="m_namamakanan" value="<?=$menu["m_namamakanan"]; ?>"  name="m_namamakanan">
    </div>

    <div class="form-group">
        <label for="m_harga">Harga</label>
        <input type="text" class="form-control" id="m_harga" value="<?=$menu["m_harga"]; ?>" name="m_harga">
    </div>

    <div class="form-group">
        <label for="m_descmakanan">Deskripsi</label>
        <input type="text" class="form-control" id="m_descmakanan" value="<?=$menu["m_descmakanan"]; ?>" name="m_descmakanan">
    </div>

    <div class="form-group">
        <label for="m_gambar">Gambar</label>
        <img src="asset/img/<?=$menu ['m_gambar']; ?>" widht="50"> <br>
        <input type="file" class="form-control" id="m_gambar" placeholder="Gambar" name="m_gambar">
    </div>

    <button type="submit" name="submit">update</button>
</form>
</div>




</body>

<?php 
require 'footer.php';
?>
</html>