
<?php

$bdd = new PDO('mysql:host=localhost;dbname=JollyClick;charset=utf8', 'root', 'admin');

) {



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








