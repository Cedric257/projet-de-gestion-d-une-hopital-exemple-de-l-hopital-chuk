<h3>Ajouter un Nouveau Malalade</h3>
	
	<div>
		<form action="inserermalade.php" method="POST"  >
  <table align="">
   <!-- <tr><td></td><td><?php echo $mess; ?></td></tr>-->
    <tr><td></td><td><strong >Matricule</strong></td></tr>
   <tr><td></td><td><input type="text" name="Matricule" class="champ" size="25"  ></td></tr>
   
   <tr><td></td><td><strong>Nom</strong></td></tr>
   <tr><td></td><td><input type="text" name="NomM" class="champ" size="25"></td></tr>
   
   <tr><td></td><td><strong>Prenom</strong></td></tr>
   <tr><td></td><td><input type="text" name="PrenomM" class="champ" size="25"></td></tr>

   <tr><td></td><td><strong>Province</strong></td></tr>
   <tr><td></td><td><input type="text" name="Province" class="champ" size="25"></td></tr>

   <tr><td></td><td><strong>Commune</strong></td></tr>
   <tr><td></td><td><input type="text" name="Colline" class="champ" size="25"></td></tr>

   <tr><td></td><td><strong>Colline</strong></td></tr>
   <tr><td></td><td><input type="text" name="Colline" class="champ" size="25"></td></tr>

   <tr><td></td><td><strong>Date de Naissance</strong></td></tr>
   <tr><td></td><td><input type="date" name="DatedeNaissance" class="champ" size="25"></td></tr>

   <tr><td></td><td><strong>Telephone</strong></td></tr>
   <tr><td></td><td><input type="tel" name="Telephone" class="champ" size="25"></td></tr>
   <tr><td></td><td><strong>Maladie</strong></td></tr>
   <tr><td></td><td><input type="text" name="Maladie" class="champ" size="25"></td></tr>
  
  </table>
  
  <input type="submit" name="bajouter" value="Ajouter" class="bouton" >
  <input type="submit" name="bsupp" value="Supprimer" class="bouton" >
  <input type="submit" name="bmodif" value="Modifier" class="bouton" >
  <input type="submit" name="brech" value="Recherche" class="bouton" >
  </form>
  <p><br></p>
</div>
