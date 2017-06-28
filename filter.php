
<?php

$bdd = new PDO('mysql:host=localhost;dbname=JollyClick;charset=utf8', 'root', 'admin');

// $reponse = $bdd->query('SELECT ID_skill, compteur FROM liked_skills');


// $donnees = $reponse->fetchAll();

// foreach ($donnees as $ID_skill => $value) {



$user =$bdd->query('
	SELECT user_id, skill_id 

	FROM clicker_skills  
	INNER JOIN liked_skills
	ON clicker_skills.skill_id = liked_skills.ID_skill
	WHERE NOT clicker_skills.user_id = liked_skills.ID_porteur
	');


$data = $user->fetchAll();

foreach($data as $data_user){
	?><p>
	<?php echo"Profil competent :".$data_user['user_id'];}?>
</p><br/>








