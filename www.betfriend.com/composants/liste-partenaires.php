<div id="partenaires">

    <div id="conteneurChampFiltrePartenaires">
        <input id="champFiltrePartenaires" type="text" placeholder="Filtrer" name="filtre" />
    </div>
    
    <?php

        $lienBdd = new PDO('mysql:host=localhost;dbname=betfriend', 'root', '');
        $requete = $lienBdd->query('SELECT * FROM amis AS a LEFT JOIN parieurs AS p ON a.id_ami = p.id WHERE id_parieur = 1');

    ?>
        
    <?php while ($ami = $requete->fetch()) { ?>
    
        <div class="ami">
        
            <?php echo $ami['pseudo']; ?>
    
        </div>
    
    <?php } ?>

</div>