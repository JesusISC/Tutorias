<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */

$this->title = Yii::t('app', 'Create Alumnos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alumnos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'carreras' => $carreras,
    ]) ?>

</div>
