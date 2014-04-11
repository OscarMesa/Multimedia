<div id="content5">
    <div class="flechas">
        <a onclick="" id="anterior" class="load" href="content4">
            <img src="themes/multimedia/imagenes/multimedia/navegacion/ico_Anterior.png"><span>Anterior</span></a>
        <a onclick="" class="load" href="content6" id="siguiente">
            <img src="themes/multimedia/imagenes/multimedia/navegacion/ico_Siguiente.png"><span>Siguiente</span></a>
    </div>
</div>
<div id="sec-formulario1">
    <?php 
    if(isset(Yii::app()->session['formulario1']))
        $model = Yii::app()->session['formulario1'];
    else
        $model = new Formulario1();
    
        echo $this->renderPartial('_formulario1',array('model'=> $model));
    ?>
</div>

<style type="text/css">
    #content5 {
        background: url('themes/multimedia/imagenes/multimedia/5_MUILTIMEDIA GRANDE-01.jpg') no-repeat;
        padding-bottom: 44em;
        width:921px; 
        margin:0 auto;
    }
    
    
</style>