<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m161204_131730_create_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('文章标题'),
            'content' => $this->string()->comment('文章内容'),
            'logo' => $this->string()->comment('logo'),
            'category_id' => $this->integer()->notNull()->comment('分类id'),
            'click_num' => $this->integer()->comment('点击数'),
            'status' => $this->smallInteger()->notNull()->defaultValue(1)->comment('0 隐蔽  1 正常'),
            'keywords' => $this->string()->comment('关键字'),
            'description' => $this->string()->comment('描述'),
            'create_time' => $this->integer()->unsigned()->comment('创建时间'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article');
    }
}
