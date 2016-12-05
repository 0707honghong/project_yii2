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
            'title' => $this->string()->notNull()->comment('���±���'),
            'content' => $this->string()->comment('��������'),
            'logo' => $this->string()->comment('logo'),
            'category_id' => $this->integer()->notNull()->comment('����id'),
            'click_num' => $this->integer()->comment('�����'),
            'status' => $this->smallInteger()->notNull()->defaultValue(1)->comment('0 ����  1 ����'),
            'keywords' => $this->string()->comment('�ؼ���'),
            'description' => $this->string()->comment('����'),
            'create_time' => $this->integer()->unsigned()->comment('����ʱ��'),
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
