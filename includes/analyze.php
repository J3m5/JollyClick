<?php


$pdp_id = 1;



$requete = $conn->prepare(



  "INSERT INTO liked_skills (ID_porteur,ID_skill, compteur)

    SELECT test.porteur, test.skill, COUNT(test.skill) AS cnt

    FROM (



     SELECT faves.user_id AS porteur, faves.content_id, clicker_skills.user_id, clicker_skills.skill_id AS skill



     FROM faves



     INNER JOIN clicker_skills

     ON clicker_skills.user_id = faves.content_id

    ) AS test

  GROUP BY test.skill, test.porteur

  ORDER BY cnt DESC

");







$requete->execute();



?>