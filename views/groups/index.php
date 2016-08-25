<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-heart"></i>       เพิ่มข้อมูล', ['create'], ['class' => 'btn btn-info']) ?>
    </p>
</div>
<div class="panel panel-info">
  <div class="panel-heading"><i class="glyphicon glyphicon-fire"></i> งานประกันสุขภาพและสารสนเทศทางการแพทย์</div>
  <div class="panel-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'group_ID',
            'depgroup.namegroup',
            [
'attribute'=>'group_id',
'value'=>'depgroup.namegroup'
],
            'departments',

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
  </div>
</div>