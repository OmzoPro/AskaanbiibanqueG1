<?php include('modele/agenceControle.php');?> 
<section class="open-account-area ptb-100">
  <div class="container">
    <div class="section-title">
        <h2>liste des agences</h2>
    </div>
      <!-- Debut tableau -->
      <table class="table table-bordered" >
        <!--entete tableau-->
        <thead >
          <tr>
            <th>Nom</th>
            <th>email</th>
            <th>telephone</th>
            <th>adresse</th>
            <th>dateCreation</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <!--corpt tableau-->
        <tbody>
          <!--
          recuperation des données de la base par l'appél de la methode
          getUsers de la classe UserController s
            --->
          <?php $agenceController = new AgenceControle(); ?>
          <?php if($agenceController->getAgences()) : ?>
          <?php foreach($agenceController->getAgences() as $Agences) : ?>
          <tr>
            <th><?= $Agences['nomAgence'] ?></th>
            <th><?= $Agences['email'] ?></th>
            <th><?= $Agences['telephone'] ?></th>
            <th><?= $Agences['adresse'] ?></th>
            <th><?= $Agences['dateCreation'] ?></th>
            <th>
              <a href="?p=detail_agence&id=<?= $Agences['idAgence'] ?>" > <span class="material-icons">info</span></a>
              <a href="?p=edit_agence&id=<?= $Agences['idAgence'] ?>" > <span class="material-icons">edit_off</span></a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="controler/delete_agence.php?id=<?= $Agences['idAgence'] ?>" ><span class="material-icons">delete</span></a>
            </th>
          </tr>
          <?php endforeach; ?>
          <?php endif; ?>     
        </tbody>
      </table>
      <!-- Fin tableau -->
    </div>
</section>
        
