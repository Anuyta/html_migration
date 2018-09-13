<?php

use yii\db\Migration;

/**
 * Class m180913_154524_article_create
 */
class m180913_154524_article_create extends Migration
{
    const ARTICLES_TABLE = 'articles';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::ARTICLES_TABLE, array(
            'id_article' => $this->primaryKey(),
            'title' => $this->string(),
            'text' => $this->text(),
        ));

        $this->batchInsert(self::ARTICLES_TABLE, ['id_article', 'title', 'text'], [
            ['', 'ABOUT US', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. 
							Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero.'],
            ['', 'OUR BENEFITS', ''],
            ['', 'TESTIMONIALS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa.  Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. ']
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::ARTICLES_TABLE);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180913_154524_article_create cannot be reverted.\n";

        return false;
    }
    */
}
