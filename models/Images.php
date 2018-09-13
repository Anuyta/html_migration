<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property int $id_image
 * @property int $id_position
 * @property string $url
 * @property string $alt
 *
 * @property Positions $position
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_position'], 'integer'],
            [['url'], 'string', 'max' => 255],
            [['id_position'], 'exist', 'skipOnError' => true, 'targetClass' => Positions::className(), 'targetAttribute' => ['id_position' => 'id_position']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_image' => 'Id Image',
            'id_position' => 'Id Position',
            'url' => 'Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Positions::className(), ['id_position' => 'id_position']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPositions()
    {
        return $this->hasMany(Positions::className(), ['id_position' => 'id_position']);
    }

    /**
     * @param $className
     * @return Articles[]|Images[]|Paragraphs[]|array|\yii\db\ActiveRecord[]
     */
    public function getImages($className)
    {
        $images = Images::find()
            ->innerJoinWith('positions','Images.id_position = positions.id_position')
            ->andWhere(['positions.position' => $className])->all();

        return $images;
    }


}
