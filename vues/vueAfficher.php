<?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
<?php } ?>
			
<h2>Liste des chansons :</h2>
<ul>
<?php foreach($CHANSON as $chanson) { ?>
	<li><?= $chanson['idc'] ?> <?= $chanson['titre'] ?></li>
<?php } ?>
</ul>

<h2>Liste des artistes :</h2>
<ul>
<?php foreach($GROUPE as $groupe) { ?>
	<li><?= $groupe['nomg'] ?> <?= $groupe['nomg'] ?> (#<?= $groupe['nomg'] ?>)</li> // ????
<?php } ?>
</ul>

