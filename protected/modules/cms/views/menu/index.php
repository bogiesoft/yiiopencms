<?php
$this->breadcrumbs=array(
	Yii::t('CmsModule.core','Cms')=>array('admin/index'),
	Yii::t('CmsModule.core','Menus'),
);
?>

<div class="cms-menu-index">
	<div class="inner">
		<h1><?php echo Yii::t('CmsModule.core','Menus'); ?></h1>
		<div class="cms-admin-buttons">
			<?php $this->widget('bootstrap.widgets.TbButton',array(
				'icon'=>'plus white',
				'label'=>Yii::t('CmsModule.core','Create menu'),
				'url'=>array('menu/create'),
				'type'=>'primary',
			)); ?>
		</div>

		<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'type'=>array('striped','condensed'),
			'dataProvider'=>$model->search(),
			'template'=>'{items} {pager}',
			'showTableOnEmpty'=>false,
			'columns'=>array(
				'id',
				array(
					'name'=>'name',
					'type'=>'raw',
					'value'=>'CHtml::link(CHtml::encode(ucfirst($data->name)),array("update","id"=>$data->id))',
				),
				array(
					'class'=>'bootstrap.widgets.TbButtonColumn',
					'template'=>'{update} {delete}',
				),
			),
		)) ?>

	</div>
</div>
