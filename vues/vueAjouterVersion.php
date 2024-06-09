<h2>Ajout d'une version</h2>

<form method="post" action="#">
	<label for="titre">titre de la chanson : </label>
	<input type="text" name="titre" id="idc" placeholder=" Brahms Lullaby" required />
	<br/><br/>
	<label for="nomficher">titre de la version: </label>
	<input type="text" name="nomficher" id="nomficher" placeholder="30 Seconds to Mars " required />
	<br/><br/>
	<label for="dateV">date de la creation de la chanson : </label>
	<input type="text" name="dateV" id="dateV" placeholder=" 1780" required />
	<br/><br/>
	<label for="duree">duree (en secondes): </label>
	<input type="text" name="duree" id="duree" placeholder="300" required />
	<br/><br/>
	<label for="groupe">groupe: </label>
	<input type="text" name="groupe" id="groupe" placeholder="30 Seconds to Mars " required />
	<br/><br/>
	<label for="genre">genre: </label>
	<input type="text" name="genre" id="genre" placeholder="Rock " required />
	<br/><br/>
	
	<input type="submit" name="boutonValider" value="Ajouter"/>
</form>


<?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
	
<?php } ?>
