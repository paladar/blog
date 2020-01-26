<?php

namespace App\Repositories;

use App\PasswordReset;
use App\Repositories\Interfaces\PasswordResetRepositoryInterface;

class PasswordResetRepository implements PasswordResetRepositoryInterface
{
    /**
     * Get all password_resets
     */
    public function all(){

    }

     /**
     * Get password reset by id
     * 
     * @param int $password_reset_id
     */
    public function get($password_reset_id){

    }

    
     /**
     * Deletes exsiting password reset
     * 
     * @param int $password_reset_id
     */
    public function delete($password_reset_id){
        
    }


}