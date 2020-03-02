<section>
            <h2>Catalogue</h2>
            <img src="assets/images/voiture1.jpg"></img>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam officia, odit similique assumenda molestiae modi fugit architecto illo nobis ab amet aut dicta quasi tenetur repellat facere ipsam deserunt nemo?</p>
            <div class="container">  
                <?php
                $listMiniature = glob("assets/images/voiture*.{jpg,jpeg,png,gif}",GLOB_BRACE); /*On liste les fichiers du dossier images en ciblant leurs noms et extensions*/
                foreach($listMiniature as $miniature){ /*Pour chaque élément de $listMinature on crée un variable $miniature qui contient le fichier correspondant */ 
                echo
                <<<CODEHTML
                <img src=$miniature alt=$miniature></img> 
                CODEHTML;
                }
                ?>
            </div>              
</section>