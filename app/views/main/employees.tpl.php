<?php
/* dump($dataArray); */

?>
<h2>Liste des employés</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Genre</th>
            <th>Date de naissance</th>
            <th>N° Séc. Sociale</th>
            <th>Nationalité</th>
            <th>Pays de naissance</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Navigo</th>
            <th>Type de contrat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataArray[0] as $employee) :
        ?>
            <tr>
                <th><?= $employee['id']?></th>
                <th><?= $employee['firstname']?></th>
                <th><?= $employee['lastname']?></th>
                <th><?= $employee['gender']?></th>
                <th><?= $employee['birthday']?></th>
                <th><?= $employee['num_security']?></th>
                <th><?= $employee['nationality']?></th>
                <th><?= $employee['birth_country']?></th>
                <th><?= $employee['email']?></th>
                <th><?= $employee['phone']?></th>
                <th><?= $employee['adress']?></th>
                <th><?= $employee['navigo']?></th>
                <th><?= $dataArray[1][$employee['contract_id']]?></th>
            </tr>
        <?php endforeach;
        ?>
    </tbody>
</table>