<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article_category`.
 */
class m161204_131713_create_article_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('article_category', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->comment('·ÖÀàÃû³Æ'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article_category');
    }
}
