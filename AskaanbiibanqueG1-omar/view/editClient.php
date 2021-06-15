<?php
if (isset($_GET['id'])) {
        $idClient = $_GET['id'];
    }
?>
<?php
require 'controler/editClient.php';

 ?>

<section class="open-account-area ptb-100">
 <div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Modifier client</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>

        <form action="controler/clientController.php" method="post">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" placeholder="Nom" name="nom" value="<?= $person->nom; ?>">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Prenom</label>
                        <input type="text" class="form-control" placeholder="Prenom" name="prenom" value="<?= $person->prenom; ?>">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Date de naissance</label>
                        <input type="date" class="form-control" placeholder="dd/mm/yy" name="naissance" value="<?= $person->naissance; ?>">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Sexe</label>
                        <input type="texte" class="form-control" placeholder="Solde" name="sexe" value="<?= $person->sexe; ?>">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="texte" class="form-control" placeholder="Adresse" name="adresse" value="<?= $person->adresse; ?>">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="tel" class="form-control" placeholder="Téléphone" name="telephone" value="<?= $person->telephone; ?>">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email address" name="email" value="<?= $person->email; ?>">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="hidden" name="dateCreation" value="<?= $person->dateCreation; ?>">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>CNI</label>
                        <input type="number" class="form-control" placeholder="CNI" name="cni" value="<?= $person->cni; ?>">
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="banner-form-btn">
                    <input type="hidden" name="dateCreation" value="<?= $person->dateCreation; ?>">
                    <input type="hidden" name="idClient" value="<?= $idClient ?>">
                        <button type="submit" name="edit_client" class="default-btn">
                            Modifier
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
</section>