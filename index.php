<?php
$couleurs = array
(
//on defini les codes relies aux couleurs
  'or' =>'#FFD700' ,
  'turquoise' => '#00CED1' ,
  'argent' => "#C0C0C0" ,
  'saumon' => "#FA8072"
);
//on demarre la boucle
foreach ($couleurs as $cle => $valeur)
{
  //on affiche la cle et la couleur de la valeur de la table
  echo "<button><strong><FONT size=\"16\" color=\"".$valeur."\">".$cle."</FONT></strong></button><br/><br/>";
}
 ?>
