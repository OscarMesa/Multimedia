<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CuestionarioController
 *
 * @author omesa
 */
class CuestionarioController extends Controller{
   
    public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('inicio','content1', 'content2', 'content3', 'content4', 'content5', 'content6', 'content7', 'content8', 'content9', 'content10', 'content11'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array(),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
        public function actionInicio()
        {
            $this->render('inicio');
        }
        
        public function actionContent1(){
            echo $this->renderPartial('content1', array(), true);
        }
        public function actionContent2(){
            echo $this->renderPartial('content2', array(), true);
        }
        public function actionContent3(){
            echo $this->renderPartial('content3', array(), true);
        }
        public function actionContent4(){
            echo $this->renderPartial('content4', array(), true);
        }
        public function actionContent5(){
            if(isset($_POST['Formulario1']))
            {
                $model = new Formulario1();
                $model->attributes = $_POST['Formulario1'];
                $model->foto = CUploadedFile::getInstance($model, 'foto');
                $model->fotoFamiliar = CUploadedFile::getInstance($model, 'fotoFamiliar');
                if($model->validate())
                {
                    
                    Yii::app()->getSession()->add('formulario1', $model);
                    echo json_encode(array('respuesta'=>true));
                    exit();
                }else{
                    echo json_encode(array('respuesta'=>false,'content'=>  $this->renderPartial('_formulario1', array('model'=>$model), true)));
                    exit();
                }
                
            }
            echo $this->renderPartial('content5', array(), true);
        }
        public function actionContent6(){
            echo $this->renderPartial('content6', array(), true);
        }
         public function actionContent7(){
            echo $this->renderPartial('content7', array(), true);
        }
         public function actionContent8(){
            echo $this->renderPartial('content8', array(), true);
        }
         public function actionContent9(){
            echo $this->renderPartial('content9', array(), true);
        }
         public function actionContent10(){
            echo $this->renderPartial('content10', array(), true);
        }
         public function actionContent11(){
            echo $this->renderPartial('content11', array(), true);
        }
}

?>
