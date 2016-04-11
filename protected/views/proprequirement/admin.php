<?php
/* @var $this ProprequirementController */
/* @var $model Proprequirement */

$this->breadcrumbs=array(
	'Property Requirements'=>array('index'),
	'Search',
);

$this->menu=array(
	array('label'=>'List Requirements', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListRequirements')),
	array('label'=>'Post Requirement', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateRequirement')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proprequirement-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Search Property Requirements</h1>

<p>
Click on <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?> for more search options.
</p>

<div class="search-form" style="display:none">
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proprequirement-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'category',
		//'fk_proptype',
		'location',
		'description',
		//'fk_client',		
		'budget',
		//'dateposted',
		'status',		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
