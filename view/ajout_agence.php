<?php include('modele/agenceControle.php');?>

<!-- Start Open Account Banner -->

<section class="open-account-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Formulaire pour ajout agence</h2>
        </div>
        <div class="open-account-form">
            <form action="controler/addAgence.php" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" placeholder="Nom" name="nom">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="tel" class="form-control" placeholder="Téléphone" name="telephone">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email address" name="email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3>Adresse</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Adresse" name="adresse">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="banner-form-btn">
                            <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Open Account Banner -->

