<?php
if (isset($_GET['type_'])) {
        $type_operation = $_GET['type_'];
    }
?>
<?php include('modele/operationControle.php');?>
<!-- Start Open Account Banner -->
<section class="open-account-area ptb-100">
    <div class="container">
        <div class="section-title">
            <?php
            if ($type_operation=='depot') {
            ?>
            <h2>Depôt d'argent</h2>
            <?php
            }else if ($type_operation=='retrait') {
            ?>
            <h2>Retrait d'argent</h2>
            <?php
            }else if ($type_operation=='virement') {
            ?>
            <h2>Operation de virement</h2>
            <?php
            }
            ?>
        </div>
        <div class="open-account-form">
            <form action="controler/addOperation.php" method="POST">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class="">Numéro de Compte du client</label>
                            <input type="text" disabled="" value="<?=$_SESSION['numCompte']?> " class="form-control">
                            <input type="hidden" name="id_compte" value="<?=$_SESSION['idCompte']?> " class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Prénom du client</label>
                            <input type="text" disabled="" value="<?=$_SESSION['prenomCompte']?> " class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nom du client</label>
                            <input type="text" disabled="" value="<?=$_SESSION['nomCompte']?> " class="form-control">
                        </div>
                    </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Type de compte du client</label>
                            <input type="text" disabled="" value="<?=$_SESSION['typeCompte']?> " class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Solde du compte</label>
                            <input type="text" name="solde" value="<?=$_SESSION['solde']?> " class="form-control">
                        </div>
                    </div>
                    <?php
                        if ($type_operation=='depot') {
                        ?>
                        <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Montant à deposer</label>
                            <input type="number" name="montantOperation" class="form-control" placeholder="Montant">
                            <input type="hidden" name="type" value="depot" class="form-control">
                        </div>
                        </div>
                        <?php
                        }else if ($type_operation=='retrait') {
                        ?>
                        <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Montant à Retirer</label>
                            <input type="number" name="montantOperation" class="form-control" placeholder="Montant">
                            <input type="hidden" name="type" value="retrait" class="form-control">
                        </div>
                        </div>
                        <?php
                        }else if ($type_operation=='virement') {
                        ?>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label><center><h1>Coordonnées du destinataire</h1></center></label>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Numero de Compte du destinataire</label>
                                <input type="text" disabled="" value="<?=$_SESSION['numCompte2']?> " class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Prénom du client destinataire</label>
                                <input type="text" disabled="" value="<?=$_SESSION['prenomCompte2']?> " class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Nom du client destinataire</label>
                                <input type="text" disabled="" value="<?=$_SESSION['nomCompte2']?> " class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Montant du virement</label>
                                <input type="number" name="montantOperation" class="form-control" placeholder="Montant">
                                <input type="hidden" name="type" value="virement" class="form-control">
                            </div>
                        </div>
                        <?php
                        }
                    ?>

                    <div class="col-lg-12">
                        <div class="banner-form-btn">
                            <?php
                                if (($type_operation=='depot') OR ($type_operation=='retrait')) {
                            ?>
                            <button type="submit" name="depot_retrait" class="default-btn">
                                Envoyer
                            </button>
                            <?php
                                }elseif ($type_operation=='virement') {
                            ?>
                            <input type="hidden" name="destinataire" value="<?=$_SESSION['idCompte2']?> " class="form-control">
                            <button type="submit" name="virement" class="default-btn">
                                Envoyer
                            </button>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Open Account Banner -->