<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupos".
 *
 * @property string $id
 * @property string $nombre
 *
 * @property Semestres $nombre0
 */
class Grupos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'integer'],
            [['nombre'], 'exist', 'skipOnError' => true, 'targetClass' => Semestres::className(), 'targetAttribute' => ['nombre' => 'id']],
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
    public function getNombre0()
    {
        return $this->hasOne(Semestres::className(), ['id' => 'nombre']);
    }
     public static function getAll(){
        $grupos[] = 'Seleccione el grupo';
        
        foreach (Grupos:: find()->all() as $registro) {
            $grupos[$registro->id] = $registro->nombre;
            
        }
        
        return $grupos;
        
    }   
}
