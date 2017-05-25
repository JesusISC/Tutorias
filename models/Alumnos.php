<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property string $id
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $telefono
 * @property integer $edad
 * @property string $correo_electronico
 * @property string $estado_civil
 * @property string $nu_carrera
 *
 * @property Carreras $nuCarrera
 * @property Carreras $nuCarrera0
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'direccion', 'telefono'], 'required'],
            [['nombre', 'apellido', 'direccion', 'telefono', 'correo_electronico', 'estado_civil'], 'string'],
            [['edad', 'nu_carrera'], 'integer'],
            [['nu_carrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carreras::className(), 'targetAttribute' => ['nu_carrera' => 'id']],
            [['nu_carrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carreras::className(), 'targetAttribute' => ['nu_carrera' => 'id']],
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
            'apellido' => Yii::t('app', 'Apellido'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
            'edad' => Yii::t('app', 'Edad'),
            'correo_electronico' => Yii::t('app', 'Correo Electronico'),
            'estado_civil' => Yii::t('app', 'Estado Civil'),
            'nu_carrera' => Yii::t('app', 'Nu Carrera'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuCarrera()
    {
        return $this->hasOne(Carreras::className(), ['id' => 'nu_carrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuCarrera0()
    {
        return $this->hasOne(Carreras::className(), ['id' => 'nu_carrera']);
    }
}
