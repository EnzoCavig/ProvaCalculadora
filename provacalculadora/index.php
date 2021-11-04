<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title>HTML Calculator</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
	<form method="POST">
    <input type="submit" name="valor" value="1">
		<input type="submit" name="valor" value="2">
		<input type="submit" name="valor" value="3">
		<input type="submit" name="operador" value="-">
        <br>
		<input type="submit" name="valor" value="4">
		<input type="submit" name="valor" value="5">
		<input type="submit" name="valor" value="6">
		<input type="submit" name="operador" value="+">
		<br>
		<input type="submit" name="valor" value="7">
		<input type="submit" name="valor" value="8">
		<input type="submit" name="valor" value="9">
		<input type="submit" name="multiplicacao"  value="*">
		<br>
		<input type="reset"  name="reset" value="Reset">
		<input type="submit" name="valor" value="0">
		<input type="submit" name="operador" value="/">
		<br>
		<input type="submit" name="igual" value="=">
		
	</form>
<?php
    if (!session_id()) {
        session_start();
    }

    $_SESSION['valores'] = $_POST['valor'];
    
    if ($_POST['valor']){
        $_SESSION['resultado'] = $_POST['valor'] . $_SESSION['valores'];
        $result = $_SESSION['resultado'];
    }
    
   // if ($_POST['operador']){

  //  }


?>
Resultado <p name="resultado" style="border: 1px solid black; width:100px;"><?php echo $result ?> </p>

</body>
</html>