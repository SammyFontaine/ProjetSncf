<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1><?php echo $titre; ?></h1>
        <?php
        foreach ($lesActivites as $act)
        {
        ?>


        <a href="<?php echo base_url(); ?>index.php/CtrlAccueilSncf/AfficherLesFormations" method="get" value="<?php echo $act->numero; ?>"><?php echo $act->libelle; ?><br></a>

     
        <?php
        }

        ?>
   
</html>