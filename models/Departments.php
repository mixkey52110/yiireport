<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Departments".
 *
 * @property integer $id
 * @property integer $group_id
 * @property string $department
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Departments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id'], 'integer'],
            [['department'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'กลุ่มงาน',
            'department' => 'แผนก',
        ];
    }
    public function getDepgroup(){
return $this->hasOne(Groups::className(), ['id'=>'group_id']);
    }
            
}

