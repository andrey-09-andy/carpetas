<?php 
	session_start();

	if(isset($_SESSION['user'])){
 ?>

 <?php require_once "login/php/conexion.php";?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>iser docente</title>
	<?php require_once "login/scripts.php"; ?>
  </head>
  <body>
    
<?php 
include("include/footer.php");
//include("Controller/docente.controller.php");

?>

	<?php
require_once 'Model/conexion.php';
$controller = 'docente';
//$controller='vinculacion';



if(!isset($_REQUEST['c']))
{
    require_once "Controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    
    require_once "Controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    
    call_user_func( array( $controller, $accion ) );
}
?>
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
 ?>
