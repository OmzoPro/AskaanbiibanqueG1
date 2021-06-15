
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
                    
                        
            
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class=""><h1> chef Agence</h1></label>
                        </div>
                    </div>
 <?php $clientController = new DetailControle(); ?>
         <?php if($clientController->getDetailAgents()) : ?>
          <?php foreach($clientController->getDetailAgents() as $Agents) : ?>
              <?php endforeach; ?>
                        <?php endif; ?>
            
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>nom Agence:  <?= $Agents['nom'] ?> </label>
                        </div>
                    </div>
                     
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Adresse: <?= $Agents['adresse'] ?></label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Téléphone: <?= $Agents['adresse'] ?></label>
                        </div>
                    </div>
                   
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class=""><h1>liste des agents</h1></label>
                        </div>
                    </div>
                    <table class="table table-bordered" >
      <!--entete tableau-->
      <thead >
        <tr>
          <th>Nom</th>
          <th>Prenom</th>
          <th>telephone</th>
          <th>grade</th>
          <th>adresse</th>
        </tr>
      </thead>
      <!--corpt tableau-->
      <tbody>
        <!--
        recuperation des données de la base par l'appél de la methode
        getUsers de la classe UserController s
          --->
        <?php $agentController = new DetailControle(); ?>
        <?php if($agentController->getDetailAgents()) : ?>
        <?php foreach($agentController->getDetailAgents() as $Agents) : ?>
        <tr>
          <th><?= $Agents['nom'] ?></th>
          <th><?= $Agents['prenom'] ?></th>
          <th><?= $Agents['telephone'] ?></th>
          <th><?= $Agents['grade'] ?></th>
          <th><?= $Agents['adresse'] ?></th>
          
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class=""><h1><br>Liste des Clients</h1></label>
                        </div>
                    </div>
<table class="table table-bordered" >     
      <!--entete tableau-->
      <thead >
        <tr>
          <th>Nom</th>
          <th>Prenom</th>
          <th>telephone</th>
          <th>N° compte</th>
          <th>adresse</th>
         
      </thead>
      <!--corpt tableau-->

      <tbody>
        <!--
        recuperation des données de la base par l'appél de la methode
        getUsers de la classe UserController s
          --->
         <?php $clientController = new DetailControle(); ?>
         <?php if($clientController->getDetailClients()) : ?>
          <?php foreach($clientController->getDetailClients() as $Agents) : ?>
        <tr>
          <th><?= $Agents['nom'] ?></th>
          <th><?= $Agents['prenom'] ?></th>
          <th><?= $Agents['telephone'] ?></th>
          <th><?= $Agents['numCompte'] ?></th>
          <th><?= $Agents['adresse'] ?></th>
         
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
       
