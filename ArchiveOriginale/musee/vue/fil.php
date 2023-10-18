<!--presentation d'une liste d'oeuvre sous forme de carte en page d'accueil -->
<div class="container">
    <div class="row"><br>
        <img id="i" src="./image/zxj.jpg" style="position:absolute; z-index: 4; width: 40rem">

        <h1><img src="./image/zxj.jpg" style="width: 3rem">Accueil</h1><br><br>

        <section id="photos">
        <?php for($i=0; $i<count($tab_oeuvre); $i++)
        {
            print('
                        <div class="card bg-black border-dark shadow-lg" >
                            <a href=\'./?action=oeuvre&id_oeuvre='.$tab_oeuvre[$i]->getId().'\'>
                                <img class="card-img-top" src="./image/'.$tab_oeuvre[$i]->getChemin().'" alt="Card image cap">
                                
                                <div class="cover">
                                    <div class="card-body">
                                        <h4 class="card-title">'.$tab_oeuvre[$i]->getNom().'</h4>
                                        <h6 class="card-text"><small class="text-muted">'.$tab_oeuvre[$i]->getDate().'</small></h6>
                                    </div>          
                                </div>
                            </a>
                            
                        </div><br>
                ');
        }?>
        </section>
    </div>
</div>

<script>
    var fadeAnim = window.setTimeout(
        function(){
            $('#i').fadeOut('slow');
        },1000);

    $('#i').hover(
        function(){
            window.clearTimeout(fadeAnim);
        },
        function(){
            $(this).fadeOut(500);
        });
</script>