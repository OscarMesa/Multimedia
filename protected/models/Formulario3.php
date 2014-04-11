<?php

class Formulario3 extends CFormModel
{
    public $objetivosVida;
    public $vinisteAlMundo;
    public $motivacionASeguir;
    public $metas;
    
    public function rules()
	{
		return array(   
			array('metas,objetivosVida,vinisteAlMundo,motivacionASeguir', 'required'),
		);
	}
        
        public function attributeLabels()
	{
		return array(
			'objetivosVida'=>'¿Cuáles son tus objetivos de vida?',
			'vinisteAlMundo'=>'¿Para qué viniste a este mundo?',
			'motivacionASeguir'=>'¿Qué te motiva a seguir adelante?'  ,
			'metas'=>'¿Cuáles son tus metas desde: Lo laboral, lo académico, lo corporal, emocional y espiritual?',
		);
	}
}

?>