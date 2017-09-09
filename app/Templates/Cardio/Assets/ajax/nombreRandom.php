<?php

$number_mini = $_POST['nombre_mini'];
$number_maxi = $_POST['nombre_maxi'];


$result_number = rand($number_mini, $number_maxi);

?>

<p>
	Voici le r&eacute;sultat al&eacute;atoire que vous cherchiez : 
</p>
<p >
	<?= $result_number ?>
</p>
