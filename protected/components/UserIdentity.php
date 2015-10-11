<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users=array(
			// username => password
			'apogel41'=>'apogel41',
		);
		if(isset($users[$this->username])){
			if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
			elseif($users[$this->username]!==$this->password){
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
			else{
				$this->errorCode=self::ERROR_NONE;
				$this->setState('userid','admin');
			}
			return !$this->errorCode;	
		}else{
			$record = User::model()->find('login=:login',array(':login'=>$this->username));

			if($record===null){
		        $this->errorCode=self::ERROR_USERNAME_INVALID;
			}
		    //else if(!CPasswordHelper::verifyPassword($this->password,$record->password))
		    else if($this->password != $record->password){
		        $this->errorCode=self::ERROR_PASSWORD_INVALID;
		    }
		    else
		    {
		        //$this->_id=$record->id;
		        $this->setState('userid', $record->id);
		        $this->errorCode=self::ERROR_NONE;
		    }
		    return !$this->errorCode;
		}
		
	}
}