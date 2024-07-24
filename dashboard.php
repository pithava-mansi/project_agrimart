<?php 
//include 'admin/error.php';
session_start();
// Include database connection file
include_once('admin/controller/database/db.php');
if (!isset($_SESSION['ID'])) {
    header("Location:index.php");
    exit();
}
if(2==$_SESSION['ROLE']){
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>agrimart</title>
	<?php include 'css.php'; ?>
</head>

<body>
	<?php include 'menu.php'; ?>

	<div class="container ">
		<div class="row mt-1">
			<?php include 'slider.php'; ?>
		</div>       
	</div>
    <?php include 'footer.php'; ?>
	

	<?php include 'js.php'; ?>
</body>

</html>
        <?php }else{
            session_destroy();
            header("Location:index.php");
        }
        
        ?>