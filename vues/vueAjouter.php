<h2>Ajout d'une chanson</h2>

<form method="post" action="#">
	<label for="titre">titre de la chanson : </label>
	<input type="text" name="titre" id="idc" placeholder=" Brahms Lullaby" required />
	<br/><br/>
	<label for="nomg">groupe: </label>
	<input type="text" name="nomg" id="nomg" placeholder="30 Seconds to Mars " required />
	<br/><br/>
	<label for="datecreation">date de la creation de la chanson : </label>
	<input type="text" name="datecreation" id="datecreation" placeholder=" 1780" required />
	<br/><br/>
	<input type="submit" name="boutonValider" value="Ajouter"/>
</form>



<?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
	
<?php } ?>

