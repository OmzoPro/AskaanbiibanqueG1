<?php
if (isset($_GET['id'])) {
        $idAgent = $_GET['id'];
    }
?>
<?php
require 'controler/editAgent.php';

 ?>

 <div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
      <div class="row">
          <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" placeholder="Nom" name="nomAgent" value="<?= $person->nom; ?>">
                                </div>
                            </div>

                          
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Prenom</label>
                                        <input type="text" class="form-control" placeholder="Prenom" name="prenomAgent" value="<?= $person->prenom; ?>">
                                    </div>
                                </div>
        <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Date de naissance</label>
                                    <input type="Date" class="form-control" placeholder="dd/mm/yy" name="naissanceAgent" value="<?= $person->naissance; ?>">
                                </div>
                            </div>

                            
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Sexe</label>
                                    <input type="text" class="form-control" placeholder="" name="sexe" value="<?= $person->sexe; ?>">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Date de création</label>
                                    <input type="Date" class="form-control" placeholder="dd/mm/yy" name="dateCreaAgent" value="<?= $person->dateCreation; ?>">
                                </div>
                            </div>

                            

                           
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Téléphone</label>
                                    <input type="tel" class="form-control" placeholder="Téléphone" name="telephoneAgent" value="<?= $person->telephone; ?>">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email address" name="emailAgent" value="<?= $person->email; ?>">
                                </div>
                            </div>
                            

                            <div class="col-lg-12">
                                <h3>Address</h3>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Adresse" name="adresseAgent" value="<?= $person->adresse; ?>">
                                        </div>
                                    </div>

                                </div>
                            </div>

                           

        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>
