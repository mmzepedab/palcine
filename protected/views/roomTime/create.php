<?php
/* @var $this RoomTimeController */
/* @var $model RoomTime */
$myRoom = Room::model()->findByPK($_GET['r_id']);
$this->breadcrumbs=array(
	/*'Tandas'=>array('index'),*/
        $myRoom['name']=>array('room/view','id'=>$myRoom['id']),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Tandas', 'url'=>array('index')),
	array('label'=>'Administrar Tandas', 'url'=>array('admin')),
);
?>

<h1>Crear Tanda</h1>

<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>