<?PHP

echo '<form action="upload.php" enctype="multipart/form-data" method="post">
<input type="file" name="upload.php"/>
<form>';

if(isset($_FILES))
{
	//reccuperation des informùations
	//nom du fichier d'origine sans chemin
	$nom_origine=$_FILES['nom_fichier']['name'];
	$element_chemin = pathinfo($nom_origine);
	if(in_array())
}

?>