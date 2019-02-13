<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site STK</title>
    <link rel="stylesheet" href="vue/css/toast.min.css" type="text/css" >
   	<link rel="stylesheet" href="vue/css/bootstrap.min.css" type="text/css" >
    <!--<link rel="stylesheet" href="vue/css/style.css" type="text/css" >-->
   	<link rel="stylesheet" href="vue/css/styleBotstrap.css" type="text/css" >
</head>
<body>
<?php
require 'Vue/include/header.php';
require_once('libs/function.php')
?>
<div id="body">
	<?php
		if(!empty($_GET['page']) && is_file('Controller/'. $_GET['page'] . '.php'))
		{
				require_once('Controller/'.$_GET['page'].'.php');
		}
		else
		{
				require 'vue/include/body.php';
		}
	?>
</div>
<?php
require 'Vue/include/footer.php';

?>



<!-- DEBUT SCRIPT -->
<script src="vue/js/jquery-3.3.1.min.js" type="text/javascript" ></script>
<script src="vue/js/popper.min.js" type="text/javascript" ></script>
<script src="vue/js/bootstrap.min.js" type="text/javascript" ></script>
<script src="vue/js/toast.min.js" type="text/javascript" ></script>
<script src="vue/js/main.js" type="text/javascript" ></script>



</body>
</html>