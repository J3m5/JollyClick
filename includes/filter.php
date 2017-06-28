
<?php

	$user =$conn->query('
		INSERT INTO liked_result (ID_porteur, ID_user)
		SELECT ID_porteur, user_id

		FROM clicker_skills  
		INNER JOIN liked_skills
		ON clicker_skills.skill_id = liked_skills.ID_skill
		WHERE NOT clicker_skills.user_id = liked_skills.ID_porteur
		');


	 
$requete->execute();

?>