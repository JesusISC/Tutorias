<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carreras".
 *
 * @property string $id
 * @property string $nombre
 *
 * @property Alumnos[] $alumnos
 * @property Alumnos[] $alumnos0
 * @property Especialidades $nombre0
 */
class Carreras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carreras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'integer'],
            [['nombre'], 'exist', 'skipOnError' => true, 'targetClass' => Especialidades::className(), 'targetAttribute' => ['nombre' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(Alumnos::className(), ['nu_carrera' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos0()
    {
        return $this->hasMany(Alumnos::className(), ['nu_carrera' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNombre0()
    {
        return $this->hasOne(Carreras::className(), ['id' => 'nombre']);
    }
    public static function getAll(){
        $carreras[] = 'Seleccione la carrera';
        
        foreach (Carreras:: find()->all() as $registro) {
            $carreras[$registro->id] = $registro->nombre;
            
        }
        
        return $carreras;
        
}
}
