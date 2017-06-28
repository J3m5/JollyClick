<?php

	$user =$conn->query('

		SELECT users.firstname , users.lastname
		FROM liked_result
		left join users
	
		on users.id_user = liked_result.ID_user
		GROUP BY users.id_user


');
	$user->execute();
	$results=$user->fetchAll();

foreach ($results as $result) {
	?>
  <article class="slider-short-content">
                <img src="static/img/logo-small.png" alt="profilsimg" class="profils img-responsive">
                <p class="name text-left">	<?=$result['firstname'] . " ".$result['lastname'] . " "?></p>
                <p class="job text-right">Développeur</p>
                <div class="skill">
                    <ul>
                        <li>
                            <img src="static/img/crafts.png" alt="skill1"><br />
                            <p>Architecte</p>
                        </li>
                        <li>
                            <img src="static/img/crafts.png" alt="skill1"><br />
                            <p>Architecte</p>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <a href="#" class="btn-view"><i class="fa fa-eye" aria-hidden="true"></i> Voir la fiche</a>
                </div>
            </article>


<?php
}?>