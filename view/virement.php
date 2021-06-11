<?php include('modele/operationControle.php');?>
<!-- Start Open Account Banner -->
<section class="open-account-area ptb-100">
    <div class="container">
        <div class="section-title">
            
            <h2>Operation de virement</h2>
            
        </div>
        <div class="open-account-form">
            <form action="controler/addOperation.php" method="POST">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class="">Numéro de Compte du client</label>
                            <input type="text" disabled="" value="<?=$_SESSION['numCompte']?> " class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Prénom du client</label>
                            <input type="text" disabled="" value="<?=$_SESSION['prenom']?> " class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nom du client</label>
                            <input type="text" disabled="" value="<?=$_SESSION['nom']?> " class="form-control">
                        </div>
                    </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Type de compte du client</label>
                            <input type="text" disabled="" value="<?=$_SESSION['typeCompte']?> " class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Solde du compte</label>
                            <input type="text" name="solde" value="<?=$_SESSION['solde']?> " class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Montant à envoyer</label>
                            <input type="number" name="montant" class="form-control" placeholder="Montant">
                            <input type="hidden" name="type" value="retrait" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Compte à envoyer</label>
                            <input type="number" name="montant" class="form-control" placeholder="Numero de Compte">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="banner-form-btn">
                            <input type="hidden" name="id_client" value="<?=$_SESSION['idClient']?> " class="form-control">
                            <input type="hidden" name="id_agent" value="<?=$_SESSION['personne']?> " class="form-control">
                            <button type="submit" name="depret" class="default-btn">
                                Envoyer
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Open Account Banner -->