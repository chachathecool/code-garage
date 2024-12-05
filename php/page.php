<!DOCTYPE html>
<html>
<?php include('./includes/header.php'); ?>
    <body>
        <h1>Une petite révision de PHP</h1>
        
        <?php $source = "https://code-garage.fr" ?>
        
        <p class="source"><?php echo $source ?></p>
        
        <?php
        echo("Hello"); /*echo("Code");*/ echo("Garage");
        ?>

        
        <?php include('./includes/footer.php'); ?>
    </body>
</html>