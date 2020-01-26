<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    /**
     * Get all users
     */
    public function all(){

    }

     /**
     * Get user by id
     * 
     * @param int $user_id
     */
    public function get($user_id){

    }

     /**
     * Creates new user
     * 
     * @param array $data
     */
    public function create($data){
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = 1;
        User::create($data);
    }

    /**
     * Updates exsiting user
     * 
     * @param int $user_id
     * @param array $data
     */
    public function update($user_id,$data){

    }
    
     /**
     * Deletes exsiting user
     * 
     * @param int $user_id
     */
    public function delete($user_id){
        
    }


}