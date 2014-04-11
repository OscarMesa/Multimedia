<article id="contenido-multimedia">
    <?php echo $this->renderPartial('content1'); ?>
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

    $(document).on('click', '#finalizar', function() {

    });

</script>


<style type="text/css">

    .flechas {
        margin-top: 27%;
        margin-right: 45%;
        position: absolute;
        right: 0;
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