<?php

class m180107_163405_create_users_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('users', array(
			'id' => 'pk',
			'username' => 'string  NULL',
			'first_name'=>'string NULL',
			'last_name'=>'string NULL',
			'phone'=>'integer NULL',
			'birthday'=>'integer NULL',
			'email'=>'string NULL',
			'password'=>'string NOT NULL'
		));
	}

	public function down()
	{
		$this->dropTable('users');
	}
}