
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
                <?php $clientController = new DetailControle(); ?>
       <?php if($clientController->getDetailClients()) : ?>
        <?php foreach($clientController->getDetailClients() as $clients) : ?>
           <?php endforeach; ?>
        <?php endif; ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class=""><h1>Agence</h1></label>
                        </div>
                    </div>
                     
                  <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>nom Agence:  <?= $clients['nom'] ?> </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Adresse: <?= $clients['adresse'] ?></label>
                        </div>
                    </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Téléphone: <?= $clients['telephone'] ?></label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class=""><h1>Agent operant</h1></label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Prenom: </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nom:</label>
                        </div>
                    </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Téléphone:</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class=""><h1>Client</h1></label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Numéro de compte:  </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Prenom: </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nom: </label>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label><h5>Signature de l'agent</h5></label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label><h5>Signature du client</h5></label>
                        </div>
                    </div>
                    <br>

                </div>
               <div class="col-lg-12">
                    <div class="banner-form-btn">
                        <button onClick="imprimer('sectionAimprimer')">Imprimer le reçu</button>
                    </div>
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
       
