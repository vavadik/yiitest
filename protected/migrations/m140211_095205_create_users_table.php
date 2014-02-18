<?php

class m140211_095205_create_users_table extends CDbMigration {

    public function up() {
        
        $this->createTable('users', array(
            'id' => 'pk',
            'login' => 'string NOT NULL',
            'crypted_password' => 'string NOT NULL',
        ));
    }

    public function down() {
        echo "m140211_095205_create_users_table does not support migration down.\n";
        return false;
    }

    /*
      // Use safeUp/safeDown to do migration with transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}