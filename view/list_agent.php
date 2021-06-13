
<?php include('modele/agentControle.php');?>
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
        <th>grade</th>
        <th>adresse</th>
        <th>nom agence</th>

      
       
        <th scope="col">action</th>
      </tr>
    </thead>
    <!--corpt tableau-->

    <tbody>
      <!--
      recuperation des données de la base par l'appél de la methode
      getUsers de la classe UserController s
        --->
       <?php $agentController = new AgentControle(); ?>
       <?php if($agentController->getAgents()) : ?>
        <?php foreach($agentController->getAgents() as $Agents) : ?>
      <tr>
        <th><?= $Agents['nom'] ?></th>
        <th><?= $Agents['prenom'] ?></th>
        <th><?= $Agents['telephone'] ?></th>
        <th><?= $Agents['grade'] ?></th>
        <th><?= $Agents['adresse'] ?></th>
        <th><?= $Agents['nomAgence'] ?></th>
        <th>
           
        <a href="?p=detail_agent&id=<?= $Agents['idAgent'] ?>" > <span class="material-icons">info</span></a>
        <a href="?p=edit_agent&id=<?= $Agents['idAgent'] ?>" > <span class="material-icons">edit_off</span></a>

        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="controler/delete_agent.php?id=<?= $Agents['idAgent'] ?>" ><span class="material-icons">delete</span></a>
        
        </th>
        
       
        
        

      </tr>
      <?php endforeach; ?>
        <?php endif; ?>
      
     
    </tbody>



        
      </table>


              
            </div>
        </section>
