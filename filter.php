
<?php

$bdd = new PDO('mysql:host=localhost;dbname=jollyclick;charset=utf8', 'root', 'root');

// $reponse = $bdd->query('SELECT ID_skill, compteur FROM liked_skills');


// $donnees = $reponse->fetchAll();

// foreach ($donnees as $ID_skill => $value) {



$user =$bdd->query('
	SELECT user_id, skill_id 

	FROM clicker_skills  
	INNER JOIN liked_skills
	ON clicker_skills.skill_id = liked_skills.ID_skill');


$data = $user->fetchAll();

foreach($data as $data_user){
	?><p>
	<?php echo"clicker competent :".$data_user['user_id'];}?>
</p><br/>








