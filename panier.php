<?php 

session_start();


/**/

if(isset($_POST['ajouter'])) {
	$_SESSION['produit'][$_POST['code']]['code'] = $_POST['code'];
	$_SESSION['produit'][$_POST['code']]['nom'] = $_POST['nom'];
	$_SESSION['produit'][$_POST['code']]['prix'] = $_POST['prix'];
	var_dump($_SESSION['produit']);
}

if(isset($_POST['logout'])) {
	session_destroy();
}

if(isset($_POST['verifier'])) {
	foreach ($_SESSION['produit'] as $key => $value) {
		foreach ($value as $key2 => $value2) {
			echo $key2 . ' : ' . $value2 . '<br>';
			# code...
		}
		echo "<br>";
	}
}
 ?>

 <html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="" method="post">
 		<label for="code">Code</label>
 		<input type="text" name="code">
 		<label for="prix">Prix</label>
 		<input type="text" name="prix">
 		<label for="nom">Nom</label>
 		<input type="text" name="nom">
 		<input type="submit" name="ajouter" value="ajouter">
 		<input type="submit" name="logout" value="logout">
 		<input type="submit" name="verifier" value="verifier">
 	</form>
 </body>
 </html>