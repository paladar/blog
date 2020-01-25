<?php

namespace App\Repositories\Interfaces;

interface PasswordResetRepositoryInterface
{
    /**
     * Get all password resets
     */
    public function all();

     /**
     * Get password reset by id
     * 
     * @param int $password_reset_id
     */
    public function get($password_reset_id);
    
     /**
     * Deletes exsiting password reset
     * 
     * @param int $password_reset_id
     */
    public function delete($password_reset_id);


}