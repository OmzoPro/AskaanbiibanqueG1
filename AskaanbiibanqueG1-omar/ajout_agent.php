<?php include('modele/agentControle.php');?>

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
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Date de création</label>
                                    <input type="Date" class="form-control" placeholder="dd/mm/yy" name="dateCreation">
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
        