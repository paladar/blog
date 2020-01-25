<?php

namespace App\Repositories\Interfaces;

interface ArticleRepositoryInterface
{
    /**
     * Get all articles
     */
    public function all();

     /**
     * Get article by id
     * 
     * @param int $article_id
     */
    public function get($article_id);

     /**
     * Creates new article
     * 
     * @param array $data
     */
    public function create($data);

    /**
     * Updates exsiting article
     * 
     * @param int $article_id
     * @param array $data
     */
    public function update($article_id,$data);
    
     /**
     * Deletes exsiting article
     * 
     * @param int $article_id
     */
    public function delete($article_id);


}