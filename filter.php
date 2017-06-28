
<?php

$bdd = new PDO('mysql:host=localhost;dbname=JollyClick;charset=utf8', 'root', 'admin');

$reponse = $bdd->query('SELECT ID_skill, compteur FROM liked_skills');


$donnees = $reponse->fetchAll();

foreach ($donnees as $ID_skill => $value) {
	
	?><p><?php echo"compétences :".($value[0]); ?> <br/> <?php echo " compteur ".($value[1]);
	$user=$bdd->query('SELECT user_ID FROM clicker_skills WHERE clicker_skills.user_ID = liked_skill.ID_user');

	foreach($donnees as $user_ID => $value){
		?><p>
		<?php echo " clicker competent :".($value[0]);}?>
	</p><br/>
	<?php
}
?>







