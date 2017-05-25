<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Semestres */

$this->title = Yii::t('app', 'Create Semestres');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Semestres'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="semestres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
