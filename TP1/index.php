<form action="resultatImpot.php" method="post">
   <label>Votre nom :</label>
   <input name="nom" id="nom" type="text" required />

   <label>Votre revenu:</label>
   <input name="revenu" id="revenu" type="number"  required/></p>

   <button type="submit">Valider</button>
</form>

<?php
   require('src/resultatImpot.php');
?>