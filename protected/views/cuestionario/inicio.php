<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="message flash-' . $key . '">' . $message . "</div>\n";
    }
?>
<article id="contenido-multimedia">
    <?php echo $this->renderPartial($view); ?>
</article>


<script type="text/javascript">
    var ex = false;
    $(document).on('click', '.load', function(e) {
        var button = $(this);
        $('#contenido-multimedia').fadeOut('slow', function() {
            $('#contenido-multimedia').load('<?php echo Yii::app()->createAbsoluteUrl('cuestionario') ?>/' + button.attr('href'), function() {
                $('#contenido-multimedia').fadeIn('slow');
                window.history.pushState('', 'Multimedia', '<?php echo Yii::app()->getBaseUrl(true) ?>/' + button.attr('href'));
            });
        })

        e.preventDefault();
    });

    $(document).on('click', '#finalizar', function(e) {
        window.location.href = "<?php echo Yii::app()->getBaseUrl(true)?>/cuestionario/generador";
        e.preventDefault();
    });
    setTimeout(function(){
        $('.message').hide(600);
    },5000);
</script>


<style type="text/css">

    .flechas {
position: absolute;
left: 44%;
bottom: 0px;
width: 125px;
z-index: 999;

    }
    .flechas img {
        width: 40px;
    }

    .flechas span {
        display: block;
        font-size: 10px;
    }
    .flechas a {
        color: #000000;
        display: inline-block;
        text-decoration: none;
    }
</style>