<?php

use yii\helpers\Html;
use yii\grid\GridView;
use culturePnPsu\album\models\Album;
use culturePnPsu\album\models\AlbumCategory;

/* @var $this yii\web\View */
/* @var $searchModel culturePnPsu\album\models\AlbumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('album', 'อัลบั้ม');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class='box box-info'>
    <div class='box-header'>
        <h3 class='box-title'><?= Html::encode($this->title) ?></h3>
    </div><!--box-header -->

    <div class='box-body pad'>
        <div class="album-index">

            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'id',
                    [
                        'attribute' => 'image_intro',
                        'format' => 'html',
                        'contentOptions' => ['style' => '', 'width' => '100'],
                        'value' => function($model) {
                    return Html::img($model->imgTemp, [ 'width' => '100']);
                }
                    ],
                    'title',
                    [
                        'attribute' => 'category_id',
                        'filter' => AlbumCategory::getList(),
                        'value' => 'category.title'
                    ],
                    [
                        'attribute' => 'status',
                        'format'=>'html',
                        'filter' => Album::getItemStatus(),
                        'value' => 'statusLabel'
                    ],
                    // 'path',
                    // 'image_intro',
                     'start:date',
                     'created_by',
                    // 'updated_at',
                    // 'updated_by',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
    </div><!--box-body pad-->
</div><!--box box-info-->
