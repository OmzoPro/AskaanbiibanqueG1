
<?php include('modele/clientControle.php');?>
 <!-- Debut tableau -->
        
    
        <!-- Fin tableau -->

         <section class="open-account-area ptb-100">
            <div class="container">
                <div class="section-title" style="margin-top: -55px;">
                    <h2>liste agnet</h2>
                </div>

                

                   
  <table class="table table-bordered" >
         
<!--entete tableau-->
         <thead >
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>telephone</th>
        <th>SEXE</th>
        <th>adresse</th>
        <th>email</th>

      
       
        <th scope="col">action</th>
      </tr>
    </thead>
    <!--corpt tableau-->

    <tbody>
      <!--
      recuperation des données de la base par l'appél de la methode
      getUsers de la classe UserController s
        --->
       <?php $clientController = new ClientControle(); ?>
       <?php if($clientController->getClients()) : ?>
        <?php foreach($clientController->getClients() as $Agents) : ?>
      <tr>
        <th><?= $Agents['nom'] ?></th>
        <th><?= $Agents['prenom'] ?></th>
        <th><?= $Agents['telephone'] ?></th>
        <th><?= $Agents['sexe'] ?></th>
        <th><?= $Agents['adresse'] ?></th>
        <th><?= $Agents['email'] ?></th>
        <th>
           
        <a href=""><span class="material-icons">info</span></a>
        <a href="#&id=<?= $Agents['idClient'] ?>" > <span class="material-icons">edit_off</span></a>

        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="#&id=<?= $Agents['idClient'] ?>" ><span class="material-icons">delete</span></a>
        
        </th>
        
       
        
        

      </tr>
      <?php endforeach; ?>
        <?php endif; ?>
      
     
    </tbody>



        
      </table>
    

              
            </div>
        </section>