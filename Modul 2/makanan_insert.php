<?php 
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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RESTORAN KRUSTY CRAB</title>
</head>
<body>
	<h1>Tambah makanan</h1>
	<form action="" method="post" enctype="multipart/form-data" >
		<ul>
			<li>
                <label for="m_namamakanan">Nama Makanan</label>
                <input type="text" id="m_namamakanan" name="m_namamakanan" >
			</li>
			<li>
				<label for="m_harga">Harga</label><input type="text" name="m_harga" id="m_harga">
			</li>
			<li>
				<label for="m_descmakanan">Deskripsi</label><input type="text" name="m_descmakanan" id="m_descmakanan">
			</li>
			<li>
				<label for="m_gambar">Gambar</label>
				<input type="file" name="m_gambar" id="m_gambar">
            </li>
            <li>
                <button type="submit" name="tambah">Tambah</button>
            </li>
		</ul>
	</form>
</body>
</html>