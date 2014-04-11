<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <?php 
            Yii::app()->clientScript->registerCoreScript('jquery');
            Yii::app()->clientScript->registerCoreScript('jquery.ui');
        ?>
    </head>
    <body>
        <header></header>
        <section id="contenido">
            <?php 
                echo $content;
            ?>
        </section>
        <footer></footer>
    </body>
</html>