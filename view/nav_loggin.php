<div class="main-navbar">
  <div class="container">
      <nav class="navbar navbar-expand-md navbar-light">
          <a class="navbar-brand" href="?p=accueil">
              <img src="assets/img/logo-3.png" alt="image">
          </a>

          <?php
          if ($_SESSION['role']=="") {
          ?>
          <div class="container">
            <div class="option-inner">
                <div class="others-options d-flex align-items-center">
                    <div class="option-item">
                        <a href="?p=login" class="default-btn">Connectez-Vous</a>
                    </div>
                </div>
            </div>
          </div>
          <?php
          }
          ?>
          <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
              <ul class="navbar-nav">
                  <?php
                  if( $_SESSION['role']=='agent') {         
                  ?>
                  <li class="nav-item">
                      <a href="?p=ajout_client" class="nav-link">
                          Ajout de client
                      </a>
                  </li>
                  <?php
                  }
                  if(( $_SESSION['role']=='agent') OR ( $_SESSION['role']=='chef_agent') OR ( $_SESSION['role']=='super_admin')) { 
                  ?>
                  <li class="nav-item">
                      <a href="?p=list_client" class="nav-link">
                          Listes des Clients
                      </a>
                  </li>
                  <?php
                  }
                  if( $_SESSION['role']=='agent') { 
                  ?>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          Operattions 
                          <i class='bx bx-chevron-down'></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li class="nav-item">
                              <a href="?p=operation&type_=depot" class="nav-link">
                                  Depôt
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="?p=operation&type_=retrait" class="nav-link">
                                  Retrait
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="?p=operation&type_=virement" class="nav-link">
                                  Virement
                              </a>
                          </li>
                      </ul>
                  </li>
                  <?php
                  }
                  if( $_SESSION['role']=='chef_agent') { 
                  ?>
                  <li class="nav-item">
                      <a href="?p=ajout_agent" class="nav-link">
                          Ajout Agent
                      </a>
                  </li>
                  <?php
                  }
                  if (( $_SESSION['role']=='chef_agent') OR ( $_SESSION['role']=='super_admin')){
                  ?>
                  <li class="nav-item">
                      <a href="?p=list_agent" class="nav-link">
                          Listes des Agents
                      </a>
                  </li>
                  <?php
                  }
                  if ($_SESSION['role']=='super_admin'){
                  ?>
                  <li class="nav-item">
                      <a href="?p=ajout_agence" class="nav-link">
                          Ajout Agence
                      </a>
                  </li>
                  <?php
                  }
                  if ($_SESSION['role']=='super_admin'){
                  ?>
                  <li class="nav-item">
                      <a href="?p=list_agence" class="nav-link">
                          Listes des Agences
                      </a>
                  </li>
                  <?php
                  }
                  ?>
              </ul>

              <div class="others-options d-flex align-items-center">
                  <div class="option-item">
                      <?php
                      if ($_SESSION['role']=='client') {
                        $prenom=$_SESSION['prenom'];
                        $nom=$_SESSION['nom'];

                      }else if (( $_SESSION['role']=='chef_agent') OR ( $_SESSION['role']=='agent')){
                        $prenom=$_SESSION['prenomAgent'];
                        $nom=$_SESSION['nomAgent'];
                      }else if ($_SESSION['role']=='super_admin'){
                        $prenom="Super";
                        $nom="Admin";
                      }else{
                        $prenom="";
                        $nom="";
                      }

                      ?>
                      <a href="?deconnexion=true" class="default-btn">Bienvenue <?=$prenom?> <?=$nom?></a>
                  </div>
              </div>
          </div>
      </nav>
  </div>
</div>