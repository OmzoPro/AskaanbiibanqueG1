<?php include('modele/clientControle.php');?>
  <!-- Debut tableau -->
  <section class="open-account-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Listes des clients</h2>
                </div>

                <div class="open-account-form">


        <div class="tableau">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Adresse</th>
            <th scope="col">N° Compte</th>
            <th scope="col">Solde</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php $clientController = new clientControle(); ?>
       <?php if($clientController->getClient()) : ?>
        <?php foreach($clientController->getClient() as $client) : ?>

      <tr>
          <tr>
            
            <td><?= $client['nom'] ?></td>
            <td><?= $client['prenom'] ?></td>
            <td><?= $client['telephone'] ?></td>
            <td><?= $client['adresse'] ?></td>
            <td><?= $client['numCompte'] ?></td>
            <td><?= $client['solde'] ?></td>
            <td>
            
            <a href="?p=editClient&id=<?= $client['idClient'] ?>" > <span class="material-icons">edit</span></a>

            <a onclick="return confirm('Vous êtes sure de vouloir supprimer?')" href="controler/deleteClient.php?id=<?= $client['idClient'] ?>" >
            <span class="material-icons">delete</span></a>

        </td>
          </tr>
          <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</section>
        <!-- Fin tableau -->