<?php
// Affichage des publicités Google (Exemple)
echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
echo '<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-XXXXXX"
     data-ad-slot="XXXXXX"
     data-ad-format="auto"></ins>';
echo '<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>';


// Exemple : Un utilisateur regarde une publicité et gagne 10 points
$userId = 1;  // Remplacer par l'ID réel de l'utilisateur
$pointsGagnes = 10;

// Ajouter des points à l'utilisateur
addPoints($userId, $pointsGagnes);

// Afficher un message de confirmation
echo "Vous avez gagné $pointsGagnes points !";
?>