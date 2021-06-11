<<<<<<< HEAD
<?php

 include('modele/clientControle.php');
 include('modele/compteControle.php');
 ?>

<!-- Start Open Account Banner -->

        <section class="open-account-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Formulaire pour ajout agent</h2>
                </div>

                <div class="open-account-form">
                    <form action="controler/addClient.php" method="POST">
                        <div class="row">

                                
                            
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" placeholder="Nom" name="nom">
                                </div>
                            </div>

                            <div class="row">
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
                                    <input type="text" class="form-control" placeholder="" name="sexe">
=======
  <!-- Start Open Account Banner -->
        <section class="open-account-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Formulaire pour ajout client</h2>
                </div>

                <div class="open-account-form">
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" placeholder="Nom">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Prenom</label>
                                    <input type="text" class="form-control" placeholder="Prenom">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Type de compte</label>
                                    <select>
                                        <option value="">Compte courant</option>
                                        <option value="">Compte epargne</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Date de naissance</label>
                                    <input type="date" class="form-control" placeholder="dd/mm/yy">
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
<<<<<<< HEAD
                                    <label>Date de création</label>
                                    <input type="Date" class="form-control" placeholder="dd/mm/yy" name="dateCreation">
                                </div>
                            </div>

                            
<div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>cni</label>
                                    <input type="number" class="form-control" placeholder="cni" name="cni">
                                </div>
                            </div>

                           
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Téléphone</label>
                                    <input type="tel" class="form-control" placeholder="Téléphone" name="telephone">
=======
                                    <label>Sexe</label>
                                    <select>
                                        <option value="">Homme</option>
                                        <option value="">Femme</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Fonction</label>
                                    <input type="text" class="form-control" placeholder="Fonction">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Date de création</label>
                                    <input type="date" class="form-control" placeholder="dd/mm/yy">
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
<<<<<<< HEAD
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email address" name="email">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <h3>Address</h3>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Adresse" name="adresse">
                                        </div>
                                    </div>

                                </div>
                            </div>
                                                       <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>N° Compte</label>
                                    <input type="number" class="form-control" placeholder="N° Compte" name="numCompte">
=======
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
                                    <label>Montant</label>
                                    <input type="number" class="form-control" placeholder="Montant">
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
<<<<<<< HEAD
                                    <label>Type de Compte</label>
                                    <input type="texte" class="form-control" placeholder="Type de compte" name="typeCompte">
=======
                                    <label>Téléphone</label>
                                    <input type="tel" class="form-control" placeholder="Téléphone">
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
<<<<<<< HEAD
                                    <label>Solde</label>
                                    <input type="number" class="form-control" placeholder="Solde" name="solde">
                                </div>
                            </div>




                            <div class="col-lg-12">
                                <div class="banner-form-btn">
                                  
                                    <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
=======
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email address">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <h3>Address</h3>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Adresse">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="banner-form-btn">
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
<<<<<<< HEAD
        <!-- End Open Account Banner -->
        
=======
        <!-- End Open Account Banner -->
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
