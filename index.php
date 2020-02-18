
<html>

 <head>
  <title>Primera pagina de php</title>
  </head>
 	<body>

<h1>Operaciones basicas</h1>
		<label> Digite los valores <br>

		<form method="get" action="">
		<input type="number" name="c1" /> <br>
		<input type="number" name="c2" /> <br><br>
    <button type="submit" value="button">sumar </button> <br>
		</form>

  	</body>

 </html>

 <?php
    if(isset($_GET['c1']) && !empty($_GET['c1']))
    {
      $c1=$_GET['c1'];
      $c2=$_GET['c2'];
      $url ="http://localhost/suma.php?c1=".$c1 ."&c2=".$c2;
//echo "$url";
      $json=file_get_contents($url);
      $datos=json_decode($json,true);
      $result= $datos["data"];
//var_dump($result);
      echo "El resultado de la suma es:".$result;
    }
else {
  echo "Digite un valor.";
}

  ?>
