<?php
class User extends  CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return array(
            array('username','first_name','last_name','phone','birthday','email','password','required'),
            array('email','email')
        );
    }
    public function attributeLabels()
    {
        return array(
            'id' => 'id',
            'username' => 'username',
            'first_name'=>'first_name',
            'last_name'=>'last_name',
            'phone'=>'phone',
            'birthday'=>'birthday',
            'email'=>'email',
            'password'=>'password',
        );
    }

}