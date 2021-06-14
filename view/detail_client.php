<?php
if (isset($_GET['id'])) {
        $idAgent = $_GET['id'];
    }
?>
<?php include('modele/detailControle.php');?>
<!-- Debut tableau -->
<section class="open-account-area ptb-100">
    <div class="container">
        <div class="open-account-form">
            <form>
                <div class="row" id='sectionAimprimer'>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="logo">
                                <img src="assets/img/logo-3.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <?php $agenceController = new DetailControle(); ?>
                    <?php if($agenceController->getDetailAgences()) : ?>
                    <?php foreach($agenceController->getDetailAgences() as $Agences) : ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class=""><h1>Agence</h1></label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label >nom Agence:<?= $Agences['nomAgence'] ?>   </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Adresse: <?= $Agences['adresse'] ?></label>
                        </div>
                    </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Téléphone: <?= $Agences['telephone'] ?></label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class=""><h1>Agent operant</h1></label>
                        </div>
                    </div>
                    <?php $agentController = new DetailControle(); ?>
                    <?php if($agentController->getDetailAgents()) : ?>
                    <?php foreach($agentController->getDetailAgents() as $Agents) : ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Prenom:<?= $Agents['prenom'] ?> </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nom:<?= $Agents['nom'] ?></label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Téléphone:<?= $Agents['telephone'] ?></label>
                        </div>
                    </div>
                    
                    <?php $clientController = new DetailControle(); ?>
                    <?php if($clientController->getDetailClients()) : ?>
                    <?php foreach($clientController->getDetailClients() as $clients) : ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class=""><center><h1>liste des operations</h1></center></label>
                        </div>
                    </div>
                    <table class="table table-bordered" >     
      <!--entete tableau-->
      <thead >
        <tr>
          <th>N° compte</th>
          <th>operation</th>
          <th>date</th>
          <th>solde Avant</th>
          <th>solde Apres</th>
         
      </thead>
      <!--corpt tableau-->

      <tbody>
        <!--
        recuperation des données de la base par l'appél de la methode
        getUsers de la classe UserController s
          --->
         <?php $clientController = new DetailControle(); ?>
         <?php if($clientController->getOperation()) : ?>
          <?php foreach($clientController->getOperation() as $Agents) : ?>
        <tr>
          <th><?= $Agents['numCompte'] ?></th>
          <th><?= $Agents['typeOperation'] ?></th>
          <th><?= $Agents['dateOperation'] ?></th>
          <th><?= $Agents['soldeAvant'] ?></th>
          <th><?= $Agents['soldeApres'] ?></th>
         
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
               <div class="col-lg-12">
                    
                    <div class="banner-form-btn">
                        <button onClick="return">return</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Open Account Banner -->
<script>
function imprimer(resultat) {
      var printContents = document.getElementById(resultat).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>