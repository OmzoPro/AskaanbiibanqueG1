<<<<<<< HEAD

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
           
        <a href=""><span class="material-icons">info</span></a>
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
=======
 <!-- Debut tableau -->
        <div class="tableau">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">nom agent</th>
            <th scope="col">matricule</th>
            <th scope="col">adresse</th>
            <th scope="col">agence </th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td>
            <a href="#"><span class="material-icons">info</span></a>
            <a href="#"><span class="material-icons">edit_off</span></a>
            <a href="#"><span class="material-icons">delete</span></i></a>
        </td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="#"><span class="material-icons">info</span></a>
                <a href="#"><span class="material-icons">edit_off</span></a>
                <a href="#"><span class="material-icons">delete</span></i></a>
            </td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td>
            <a href="#"><span class="material-icons">info</span></a>
            <a href="#"><span class="material-icons">edit_off</span></a>
            <a href="#"><span class="material-icons">delete</span></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
        <!-- Fin tableau -->
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
