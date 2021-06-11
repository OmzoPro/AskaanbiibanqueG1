<!-- Start Main Banner Area -->
<div class="main-banner">
    <div class="main-banner-item banner-item-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="main-banner-content">
                        <h1>BIENVENUE a AaSKANBI_BANK</h1>
                        <p>Aaskanbi_bank est une banque dont le capital est détenu a 100% par des Sénégalais.
                            La banque Aaskanbi a pour objectif de contribuer à l’amélioration des conditions de vie des sénégalais en leur facilitant l’accès au financement. L’ouverture d’un compte est gratuite.
                            Voulant jouer le rôle d’agence de proximité, la banque Aaskanbi a ouvert des agences locales et valorise les compétences de l’expertise locale.
                            Notre équipe est constitué d’agents qualifiés et capables de répondre à vos besoins.<br>
                            </p>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="main-banner-form">
                        <div class="content">
                            <h3>Veillez-vous identifier SVP</h3>
                            <h3>
                            <?php
                                if (!empty($erreur_log)){
                                echo $erreur_log;
                                }
                            ?>                            
                            </h3>
                        </div>

                        <form action="controler/authentificationController.php" method="POST">  
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <label>LOGIN</label>
                                        <input type="text" name="login" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <label>MOT DE PASSE</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="banner-form-btn">
                                        <button type="submit" name="connexion" class="default-btn">
                                            CONNEXION
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>