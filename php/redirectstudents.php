<html>
	<head></head>
	<body>

		<?php
// Redirection aléatoire vers Typeform ou Qualtrics


$links = array();

// Actes engageants couleur neutre (x8 pour 50/50 entre avec et sans acte engageant)
$links[] = 'https://ubpsych.eu.qualtrics.com/SE/?SID=SV_5nZCmy8cahEYCZD';
$links[] = 'https://deee.typeform.com/to/sfUxY1';

shuffle($links);

$i		= rand(0, (count($links) - 1));
$link	= $links[$i];


header("Location: {$link}");


exit;
?>

	</body>
</html>
