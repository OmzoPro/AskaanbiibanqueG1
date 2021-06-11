<<<<<<< HEAD
<?php

 include('modele/agentControle.php');
 include('modele/agenceControle.php');
 ?>

<!-- Start Open Account Banner -->

=======
<!-- Start Open Account Banner -->
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
        <section class="open-account-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Formulaire pour ajout agent</h2>
                </div>

                <div class="open-account-form">
<<<<<<< HEAD
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
=======
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" placeholder="Nom">
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Prenom</label>
<<<<<<< HEAD
                                        <input type="text" class="form-control" placeholder="Prenom" name="prenom">
=======
                                        <input type="text" class="form-control" placeholder="Prenom">
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
                                    </div>
                                </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Date de naissance</label>
<<<<<<< HEAD
                                    <input type="Date" class="form-control" placeholder="dd/mm/yy" name="dateNaissance">
                                </div>
                            </div>

                            
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Sexe</label>
                                    <input type="text" class="form-control" placeholder="" name="sexe">
=======
                                    <input type="date" class="form-control" placeholder="dd/mm/yy">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Sexe</label>
                                    <select>
                                        <option value="">Homme</option>
                                        <option value="">Femme</option>
                                    </select>
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Date de création</label>
<<<<<<< HEAD
                                    <input type="Date" class="form-control" placeholder="dd/mm/yy" name="dateCreation">
                                </div>
                            </div>
<div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>grade</label>

                                    <select name="grade">
                                        <option value="agent">agent</option>
                                        <option value="chef_agent">chef_agent</option>
                                    </select>
                                </div>
                            </div>
                            

                           
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Téléphone</label>
                                    <input type="tel" class="form-control" placeholder="Téléphone" name="telephone">
=======
                                    <input type="date" class="form-control" placeholder="dd/mm/yy">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input type="password" class="form-control" placeholder="Mot de passe">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>CNI</label>
                                    <input type="number" class="form-control" placeholder="CNI">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Téléphone</label>
                                    <input type="tel" class="form-control" placeholder="Téléphone">
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
<<<<<<< HEAD
                                    <input type="email" class="form-control" placeholder="Email address" name="email">
=======
                                    <input type="email" class="form-control" placeholder="Email address">
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <h3>Address</h3>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
<<<<<<< HEAD
                                            <input type="text" class="form-control" placeholder="Adresse" name="adresse">
=======
                                            <input type="text" class="form-control" placeholder="Adresse">
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="banner-form-btn">
<<<<<<< HEAD
                                    
                                    <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
=======
                                    <button type="submit" class="default-btn">
                                        Envoyer
                                    </button>
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Open Account Banner -->
<<<<<<< HEAD
        
=======
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
