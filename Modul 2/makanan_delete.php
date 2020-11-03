<?php 
require 'mc_menu.php';

$m_id= $_GET["m_id"];


if(deleteMakanan($m_id)>0){
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href ='edit.php';
        </script>
   ";
}else{
    echo "data gagal dihapus";
}

?>