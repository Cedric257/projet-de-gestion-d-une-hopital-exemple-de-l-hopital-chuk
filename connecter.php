<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8/" >    
 <title>Login - CHUC </title>
 
 <link rel="stylesheet" href="css/loginstyle.css">

</head>
 <body>
  <div class="login">
 	<form method="post" action="authentification.php">      <fieldset> 
 <legend><h2>Authentification</h2> </legend> <!-- Titre du fieldset -->  
 
      <label for="login">Login</label>     
	   <input type="text" name="login" id="login" placeholder="Tapez votre Login"/> 
	   <label for="password">Password</label>    
	   <input type="password" name="password" id="password" placeholder="Tapez votre Mot de Passe" />   

   </fieldset>
    <input type="submit" name="bConnexion" value="Connexion" /> <input type="submit" name="bSinscrire" value="S'inscrire" /> <input type="button" name="bQuitter" value="Quitter" onClick="window.close()"/>
   </div>
 </form> 
 </body>
</html>