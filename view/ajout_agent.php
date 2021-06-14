<?php
include('modele/agentControle.php');
include('modele/agenceControle.php');
if ($_SESSION['role']="super_admin") {
    $rang="chef_agent";
}elseif ($_SESSION['role']="chef_agent") {
    $rang="agent";
}
?>
<!-- Start Open Account Banner -->

<section class="open-account-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Formulaire pour ajout agent</h2>
        </div>
        <div class="open-account-form">
            <form action="controler/addAgent.php" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>agence</label>
                            <?php $agence= new AgenceControle(); ?>
                            <select name="agence">
                                <?php foreach($agence->getAgences() as $agences){ ?>
                                <option value="<?= $agences['idAgence'] ?>"><?= $agences['nomAgence'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" placeholder="Nom" name="nom">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Prenom</label>
                            <input type="text" class="form-control" placeholder="Prenom" name="prenom">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Date de naissance</label>
                            <input type="Date" class="form-control" placeholder="dd/mm/yy" name="dateNaissance">
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
                            <input type="tel" class="form-control" placeholder="Téléphone" name="telephone">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email address" name="email">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Adresse</label>
                            <input type="text" class="form-control" placeholder="fo deuk" name="adresse">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Login</label>
                            <input type="text" class="form-control" placeholder="Login" name="mon">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>password</label>
                            <input type="Password" class="form-control" placeholder="password" name="password">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="banner-form-btn">
                        <input type="hidden" name="grade" value="<?=$rang?>"> 

                        <button type="submit" class="btn btn-primary" name="ajouter" style="background-color: red;">Ajouter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<!-- End Open Account Banner -->

