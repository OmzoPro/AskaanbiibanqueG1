<?php
if (isset($_GET['id'])) {
        $idAgence = $_GET['id'];
    }
?>
<?php
require 'controler/editAgence.php';
?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update agence</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form action="controler/agenceController.php" method="post">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" placeholder="Nom" name="nomAgence" value="<?= $person->nomAgence; ?>">
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

                <div class="col-lg-6">
                    <h3>Address</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Adresse" name="adresse" value="<?= $person->adresse; ?>">
                    </div>
                </div>
                <div class="col-lg-12">
                    <h3>Address</h3>
                    <div class="form-group">
                        <input type="hidden" name="idAgence" value="<?=$person->idAgence?>">
                        <input type="hidden" name="dateCreation" value="<?=$person->dateCreation?>">
                        <input class="btn btn-primary" type="submit" name="edit_agence" value="Modifier">
                    </div>
                </div>
            </div>
      </form>
    </div>
  </div>
</div>
