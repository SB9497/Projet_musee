<!--mise en page des oeuvres avec information-->
<div class="container">
    <div class="col-sm shadow-lg">
        <div class="card bg-black shadow-lg">
            <h1>
                <img src="./image/zxj.jpg" style="width: 3rem"><?php print($oeuvre->getNom()." ");?></h1>
              <img class="card-img-top" src="./image/<?php print($oeuvre->getChemin())?>" alt="Card image cap">

              <div class="card-body" style="opacity: .8;">
                  <h6 class="card-text"><?php print($oeuvre->getDescription())?></h6>
                  <h6 class="card-text">
                      <small class="text-muted"><?php print($oeuvre->getDate())?> </small>
                      <?php if($_SESSION["id"] == 1){
                      print ('<a href="./?action=supprimer&id_oeuvre='.$oeuvre->getId().'&id_collection='.$oeuvre->getCollection().'" class="text-danger">supprimer</a>');
                      }?>
                  </h6>
                <!--affichage d'un formulaire pour l'ajout de commentaire-->
                  <?php
                  if (isLoggedOn()){?>

                      <form action="./?action=oeuvre&id_oeuvre=<?php print($oeuvre->getId());?>" method="POST">
                          <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                              <input type="text" name="commentaire" required="required" class="form-control mr-3 bg-black text-light" style="background: transparent;
    border: none;
    border-bottom: 1px solid #bdbdbd;
    outline:none;
    box-shadow:none;" placeholder="Ajoutez un commentaire">
                              <?php if(isset($message)){
                                  print("<p class='text-danger'>".$message."</p>");
                              }?>
                              <button class="btn btn-black text-light" type="submit"><i class="fa fa-paper-plane"></i></button>
                          </div>

                      </form><?php

                      ///les commentaires correspondant a l'oeuvre
                      if (isset($tab_commentaire)) {
                          for ($i = 0; $i < count($tab_commentaire); $i++) {
                              print('
                      
                              <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                                    <p class="text-light">'.dao_utilisateur::getutilisateurbyid($tab_commentaire[$i]->getIdUtil())->getpseudo().':&nbsp;</p>
                                    <p class="text-muted">'.$tab_commentaire[$i]->getAvis().'</p>
                              </div>
                              
                              ');
                          }
                      }
                  }
                  else{
                      print('<h6 class="card-text text-white"><a href="./?action=connexion" class="text-white">Connectez-vous</a> pour voir les commentaires</h6>');
                  }
                  ?>

              </div>
        </div>
    </div>
</div>
