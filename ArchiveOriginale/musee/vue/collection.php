<div class="container">
    <div class="row"><br>

    <!--verifie si $tab_collection(oeuvre) est dispo, si oui, presentation -->
    <?php
    if(isset($tab_collection))
    {?>
            <h1><img src="./image/zxj.jpg" style="width: 3rem">Collections</h1>
    
        
        <section id="photos">
            <!--presentation des oeuvres en colonne avec titre et description-->
            <?php for($i=0; $i<count($tab_collection); $i++)
            {
                print("<br>
                    <div class=\"card bg-dark text-white\">
                        <img class=\"card-img\" style=\"opacity: 0.4; \" src=\"./image/".$tab_collection[$i]->getLast()."\" alt=\"\">
                        <a href='./?action=collection&id_collection=".$tab_collection[$i]->getIdCollection()."&nom=".$tab_collection[$i]->getNom()."'>
                            <div class=\"card-img-overlay\"><br>
                                <h1 class=\"card-title text-light\">".$tab_collection[$i]->getNom()."</h1>
                                <p class=\"card-text text-light\">".$tab_collection[$i]->getDescription()."</p>
                            </div>
                        </a>
                    </div>");
            }?>
        </section>
    <?php }
    elseif(isset($tab_oeuvre))
    {?>

            <!--affiche une section en fonction d'une collection d'oeuvre-->
            <?php print("
                <br><h1><img src=\"./image/zxj.jpg\" style=\"width: 3rem\">Collection ".$nom_col."</h1>
                <section id=\"photos\">
                ");
            for($i=0; $i<count($tab_oeuvre); $i++)
            {
                print("<br>
                    <div class=\"card bg-black text-white\">
                        <a href='./?action=oeuvre&id_oeuvre=".$tab_oeuvre[$i]->getId()."'>
                        
                            <img class=\"card-img-top\" style=\"opacity: 0.9;\" src=\"./image/".$tab_oeuvre[$i]->getChemin()."\" alt=\"image\">
                            <div class='cover'>
                                <div class=\"card-img-overlay\"><br>
                                    <h1 class=\"card-title text-light\">".$tab_oeuvre[$i]->getNom()."</h1>
                                </div>
                            </div>
                            
                        </a>
                    </div>
                ");
            }
            }?>
        </section>
    </div>
</div>


