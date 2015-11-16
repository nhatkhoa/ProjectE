<?php
/**
 * Created by PhpStorm.
 * User: Khoa Hoang
 * Date: 17/11/2015
 * Time: 4:53 AM
 */

namespace App\Repositories;

use App\Category;


class CategoryRepository
{
    public function gets(){
        return Category::all(['*']);
    }

    public function get($id){
        return Category::find(['category_id' => $id]);
    }

    public function update($category){
        $root = $this->get($category->category_id);
        if($root)
    }
}