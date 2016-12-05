<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'type' => $this->smallInteger()->notNull()->defaultValue(2)->comment('1 后台  2 前台'),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)->comment('状态@0禁用，1正常'),
            'created_time' => $this->integer()->notNull(),
            'last_login_time' => $this->integer()->notNull()->comment('最后登录的时间'),
            'last_login_ip' => $this->string()->notNull()->comment('最后登录的ip'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
