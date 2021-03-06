<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string|null $shot_description
 * @property string|null $description
 * @property int|null $is_active
 * @property int|null $createe_at
 * @property int|null $createe_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['description'], 'string'],
            [['is_active', 'createe_at', 'createe_by', 'updated_at', 'updated_by'], 'integer'],
            [['title'], 'string', 'max' => 250],
            [['shot_description'], 'string', 'max' => 400],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'shot_description' => 'Shot Description',
            'description' => 'Description',
            'is_active' => 'Is Active',
            'createe_at' => 'Createe At',
            'createe_by' => 'Createe By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
