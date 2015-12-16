<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    
    private $_id;
    public function authenticate()
	{
                $username=  strtolower($this->username);
                $adminUser=  AdminUser::model()->find('username = :username and password = :password',array(':username'=>$username,':password'=> AdminUser::model()->encrypt($this->password)));
                if($username === null){
                    $this->errorCode=  self::ERROR_USERNAME_INVALID;
                }elseif (!$adminUser) {
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        }elseif ($adminUser->attributes['disable'] == 1) { //用户账户
            $this->errorCode=  self::ERROR_PASSWORD_INVALID;
        }else{
            $this->_id=$adminUser->id;
            $this->username=$adminUser->username;
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode=== self::ERROR_NONE;
	}
}
    



