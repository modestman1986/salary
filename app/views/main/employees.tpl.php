<?php
echo '';

?>
<h1 class="text-center text-uppercase pt-5">Liste des employés</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Genre</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">N° Séc. Sociale</th>
            <th scope="col">Nationalité</th>
            <th scope="col">Pays de naissance</th>
            <th scope="col">Email</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Adresse</th>
            <th scope="col">Navigo</th>
            <th scope="col">Type de contrat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataArray[0] as $employee) :
        ?>
            <tr class="text-center">
                <th scope="col"><?= $employee['id']?></th>
                <th scope="col"><?= $employee['firstname']?></th>
                <th scope="col"><?= $employee['lastname']?></th>
                <th scope="col"><?= $employee['gender']?></th>
                <th scope="col"><?= $employee['birthday']?></th>
                <th scope="col"><?= $employee['num_security']?></th>
                <th scope="col"><?= $employee['nationality']?></th>
                <th scope="col"><?= $employee['birth_country']?></th>
                <th scope="col"><?= $employee['email']?></th>
                <th scope="col"><?= $employee['phone']?></th>
                <th scope="col"><?= $employee['adress']?></th>
                <th scope="col"><?= $employee['navigo']?></th>
                <th scope="col"><?= $employee['contract_id']?></th>
            </tr>
        <?php endforeach;
        ?>
    </tbody>
</table>