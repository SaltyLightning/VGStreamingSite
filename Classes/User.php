<?php

/**
 * Created by PhpStorm.
 * User: xay
 * Date: 11/29/2016
 * Time: 11:58 AM
 */
class User
{
    private $_username;
    private $_email;
    private $_hash;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

}