<<<<<<< HEAD
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
        
=======
<!-- Formulaire -->
      <!-- Start Open Account Banner -->
      <section class="open-account-area ptb-100">
          <div class="container">
              <div class="section-title">
                  <h2>Formulaire pour ajout Agence</h2>
              </div>

              <div class="open-account-form">
                  <form>
                      <div class="row">
                          <div class="col-lg-6 col-md-6">
                            <h3>information Chef Agence</h3>
                              <div class="form-group">
                                  <label>Nom</label>
                                  <input type="text" class="form-control" placeholder="Nom">
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-lg-6 col-md-6">
                                  <div class="form-group">
                                      <label>Prenom</label>
                                      <input type="text" class="form-control" placeholder="Prenom">
                                  </div>
                              </div>

                          <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                  <label>Date de naissance</label>
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
                              </div>
                          </div>

                          <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" class="form-control" placeholder="Email address">
                              </div>
                          </div>

                          <div class="col-lg-12">
                              <h3>information Agence</h3>
                              <div class="col-lg-6 col-md-6">
                                  <div class="form-group">
                                      <label>Nom de l'agence</label>
                                      <input type="text" class="form-control" placeholder="Nom de l'agence">
                                  </div>
                              </div>

                              <div class="col-lg-6 col-md-6">
                                  <div class="form-group">
                                      <label>Adresse de l'agence</label>
                                      <input type="text" class="form-control" placeholder="Adresse de l'agence">
                                  </div>
                              </div>

                          <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                  <label>Date de création</label>
                                  <input type="date" class="form-control" placeholder="dd/mm/yy">
                              </div>
                          </div>

                              </div>
                          </div>

                          <div class="col-lg-12">
                              <div class="banner-form-btn">
                                  <button type="submit" class="default-btn">
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
<!-- Fin Formulaire -->
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
