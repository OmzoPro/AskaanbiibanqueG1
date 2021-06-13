<?php
if (isset($_GET['id'])) {
        $idAgent = $_GET['id'];
    }
?>
<?php include('modele/detailControle.php');?>
 <!-- Debut tableau -->
 <section class="open-account-area ptb-100">
    <div class="container">
        <div class="section-title">
            
        </div>
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
                            <label>nom Agence:  <?= $Agences['nomAgence'] ?> </label>
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
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class=""><h1>Client</h1></label>
                        </div>
                    </div>
                    <?php $clientController = new DetailControle(); ?>
       <?php if($clientController->getDetailClients()) : ?>
        <?php foreach($clientController->getDetailClients() as $clients) : ?>
           <?php endforeach; ?>
        <?php endif; ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Numéro de compte: <?= $clients['numCompte'] ?> </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Prenom: <?= $clients['prenom'] ?></label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nom:<?= $clients['nom'] ?> </label>
                        </div>
                    </div>
                    
                  

                </div>
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
       
