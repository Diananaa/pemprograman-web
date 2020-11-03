<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Menu</title>
  </head>
  <body>
      
<nav class="nav fixed-bottom nav-pills nav-justified">
  <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])== "index.php")?"active":""; ?>" href="index.php">Home</a>
  <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])== "add.php")?"active":""; ?>"  href="add.php">Add</a>
  <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])== "edit.php")?"active":""; ?>"  href="edit.php">Edit</a>
  
  
</nav>