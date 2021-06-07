
<?php include('modele/agentControle.php');?>
 <!-- Debut tableau -->
        <div class="tableau" style="margin-top: 55px;">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered" >
         
<!--entete tableau-->
         <thead >
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>telephone</th>
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
        <th><?= $Agents['nomAgent'] ?></th>
        <th><?= $Agents['prenomAgent'] ?></th>
        <th><?= $Agents['telephoneAgent'] ?></th>
        <th><?= $Agents['adresseAgent'] ?></th>
        <th><?= $Agents['nomAgence'] ?></th>
        <th>
           
        <a href=""><span class="material-icons">info</span></a>
        <a href="edit_agent.php?" > <span class="material-icons">edit_off</span></a>

        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="view/delete_agent.php?id=<?= $Agents['idAgent'] ?>" ><span class="material-icons">delete</span></a>
        
        </th>
        
       
        
        

      </tr>
      <?php endforeach; ?>
        <?php endif; ?>
      
     
    </tbody>



        
      </table>
    </div>
  </div>
</div>
        <!-- Fin tableau -->

        