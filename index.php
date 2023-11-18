<!DOCTYPE html>
  <html>
  <head>
  	<title>Programme de calcul de l'imc</title>
  </head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <body> 
    <!-- creation de la section de recuperation des valeurs (taille et poids) -->
    <div class="calculimc">

  	 <h1>PROGRAMME DE CALCUL DE L'IMC</h1> </br> </br> 


  	<form method="post">
  	<div class="input-group mb-3">
      <input type="text" class="form-control" name="text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Entrez votre taille">
      <input type="text" class="form-control" name="number" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
      placeholder="*Entrez votre poids">
      <input type="submit" name="submit">
      
</div></br> </br> 
  	</br></br>
  </form>





  	<?php 
  	if (isset($_POST['submit'])) {
  		$taille = $_POST['text'];
  		$poids = $_POST['number'];
  		$result = ($poids) / ($taille*$taille);
  		echo "votre imc est de ".$result;    
  	}

  	 
  	 ?>
     </section>

  
  </body>
  </html>