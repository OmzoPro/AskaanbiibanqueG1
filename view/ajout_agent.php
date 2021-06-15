<?php
include('modele/agentControle.php');
include('modele/agenceControle.php');
?>
<!-- Start Open Account Banner -->

<section class="open-account-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Formulaire pour ajout agent</h2>
        </div>
        <div class="open-account-form">
            <form action="controler/agentController.php" method="POST">
                <div class="row">
                    <?php
                        if ($_SESSION['role']=="super_admin") {
                    ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>agence</label>
                            <?php $agence= new AgenceControle(); ?>
                            <select name="agence">
                                <?php foreach($agence->getAgences() as $agences){ ?>
                                <option value="<?= $agences['idAgence'] ?>"><?= $agences['nomAgence'] ?></option>
                                <?php } ?>
                            </select>

                            <input type="hidden" name="grade" value="chef_agent">
                        </div>
                    </div>
                    <?php
                         }elseif ($_SESSION['role']=="chef_agent") {
                    ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <center><label><h4>Agence <?= $_SESSION['nomAgence'] ?></h4></label></center>
                            <input required="required" type="hidden" value="<?= $_SESSION['idAgence'] ?>" name="agence">
                            <input type="hidden" name="grade" value="agent">
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nom</label>
                            <input required="required" type="text" class="form-control" placeholder="Nom" name="nom">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Prenom</label>
                            <input required="required" type="text" class="form-control" placeholder="Prenom" name="prenom">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Date de naissance</label>
                            <input required="required" type="Date" class="form-control" placeholder="dd/mm/yy" name="dateNaissance">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Sexe</label>
                             <select name="sexe">
                                <option value="masculin">Masculin</option>
                                <option value="feminin">Feminin</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input required="required" type="number" class="form-control" placeholder="Téléphone" name="telephone">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input required="required" type="email" class="form-control" placeholder="Email address" name="email">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Adresse</label>
                            <input required="required" type="text" class="form-control" placeholder="fo deuk" name="adresse">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Login</label>
                            <input required="required" type="text" class="form-control" placeholder="Login" name="mon">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>password</label>
                            <input required="required" type="Password" class="form-control" placeholder="password" name="password">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="banner-form-btn">
                        <input type="hidden" name="role" value="<?=$_SESSION['role']?>">
                        <button type="submit" class="btn btn-primary" name="ajouter" style="background-color: red;">Ajouter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<!-- End Open Account Banner -->

