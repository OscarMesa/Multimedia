<?php

class Formulario2 extends CFormModel
{
    public $quienEres;
    public $porqueEstudiar;
    public $queSerasEnOneYear;
    public $queSerasEnFiveYear;
    public $queSerasEnTenYear;
    
    public function rules()
	{
		return array(   
			array('queSerasEnTenYear,queSerasEnFiveYear,queSerasEnOneYear,porqueEstudiar,quienEres,', 'required'),
		);
	}
        
        public function attributeLabels()
	{
		return array(
			'queSerasEnTenYear'=>'¿Quién quieres ser en 10 años?',
			'queSerasEnFiveYear'=>'¿Quién quieres ser en 5 años?',
			'queSerasEnOneYear'=>'¿Quién quieres ser en 1 año?'  ,
			'porqueEstudiar'=>'¿Para qué estudias?',
			'quienEres'=>'¿Quién eres ahora?',
		);
	}
}

?>