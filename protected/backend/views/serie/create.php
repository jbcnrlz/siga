<?php
$this->breadcrumbs=array(
	'Series'=>array('index'),
	'Criar novo Series',
);
?>

<h1>Cadastrar serie</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>