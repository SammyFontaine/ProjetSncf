<html>
    <body>
        <h1>Les formations</h1>
        <?php
                foreach($lesFormations as $formation)
                {
                    ?>
        <a href="<?php echo base_url();?>index.php/CtrlAccueilSncf/AfficherLesAgents/<?php echo $formation->code; ?>"><?php echo $formation->intitule;?></a>
        
        <?php
                }
                ?>
    </body>
</html>