<?php
if (isset($_GET['type_'])) {
        $type_operation = $_GET['type_'];
    }
?>
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
        <?php
        if (isset($message)) {
            echo $message;
        }
        ?>
        <div class="open-account-form">
            <form action="controler/addOperation.php" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Numéro de compte du client</label>
                            <input type="text" name="compte" class="form-control" placeholder="Numéro de compte">
                            <input type="hidden" name="type_operation" value="<?=$type_operation ;?>">
                        </div>
                    </div>
                    <?php
                        if (($type_operation=='depot') OR ($type_operation=='retrait')){
                    ?>
                    <div class="col-lg-12">
                        <div class="banner-form-btn">
                            
                            <button type="submit" name="verifier_depot_retrait" class="default-btn">
                                Verifier
                            </button>
                        </div>
                    </div>
                    <?php
                      }else if ($type_operation=='virement') {
                    ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Numéro de compte du destinataire</label>
                            <input type="text" name="compte2" class="form-control" placeholder="Numéro de compte">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="banner-form-btn">
                            <button type="submit" name="verifier_virement" class="default-btn">
                                Verifier
                            </button>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Open Account Banner -->