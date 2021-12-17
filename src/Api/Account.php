<?php
namespace Detrading\Bittrex\Api;

use Detrading\Bittrex\Request;

class Account extends Request
{
    /**
     *  GET /account
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/v3/account';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /account/volume
     * */
    public function getVolume(array $data=[]){
        $this->type='GET';
        $this->path='/v3/account/volume';
        $this->data=$data;
        return $this->exec();
    }
}