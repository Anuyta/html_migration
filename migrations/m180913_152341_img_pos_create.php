<?php

use yii\db\Migration;

/**
 * Class m180913_152341_img_pos_create
 */
class m180913_152341_img_pos_create extends Migration
{
    const POSITIONS_TABLE = 'positions';
    const IMAGES_TABLE = 'images';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::POSITIONS_TABLE, array(
            'id_position' => $this->primaryKey(),
            'position' => $this->string(25)
        ));

        $this->createTable(self::IMAGES_TABLE, array(
            'id_image' => $this->primaryKey(),
            'id_position' => $this->integer(),
            'url' => $this->string(),
            'alt' => $this->string(),
        ));

        $this->addForeignKey('position_images_fk', self::IMAGES_TABLE,
            'id_position', self::POSITIONS_TABLE, 'id_position', 'SET NULL');

        $this->batchInsert(self::POSITIONS_TABLE, ['id_position', 'position'], [
            ['', 'photo'],
            ['', 'icon'],
        ]);

        $this->batchInsert(self::IMAGES_TABLE, ['id_image', 'id_position', 'url', 'alt'], [
            ['', 1, 'images/1.jpg', 'image1'],
            ['', 1, 'images/2.jpg', 'image2'],
            ['', 1, 'images/3.jpg', 'image3'],
            ['', 1, 'images/1.jpg', 'image4'],
            ['', 2, 'images/icon1.png', 'icon1'],
            ['', 2, 'images/icon2.png', 'icon2'],
            ['', 2, 'images/icon3.png', 'icon3'],
            ['', 2, 'images/icon4.png', 'icon4'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('position_images_fk', self::IMAGES_TABLE);
        $this->dropTable(self::POSITIONS_TABLE);
        $this->dropTable(self::IMAGES_TABLE);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180913_152341_img_pos_create cannot be reverted.\n";

        return false;
    }
    */
}
