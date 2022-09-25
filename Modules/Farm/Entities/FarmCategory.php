<?php

namespace Modules\Farm\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FarmCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_name','created_by'];
    
    protected static function newFactory()
    {
        return \Modules\Farm\Database\factories\FarmCategoryFactory::new();
    }

    /**
     * This function creates category
     */
    public static function createCategory($category_name){
        FarmCategory::create(array(
            'category_name' => $category_name,
            'created_by' => auth()->user()->id
        ));
    }
    /**
     * This function gets all categories
     */
    public static function getCategories(){
        return FarmCategory::paginate(10);
    }
    /**
     * This function gets edit form for category
    */
    public static function editCategoryForm($category_id){
        return FarmCategory::whereId($category_id)->get();

    }
    /**
     * This function updates the  category
     */
    public static function updateFarmCategory($category_id, $category_name){
        FarmCategory::whereId($category_id)->update(array(
            'category_name' => $category_name
        ));
    }

    /**
     * this function deletes the category
     */
    public static function deleteCategory($category_id){
        FarmCategory::whereId($category_id)->delete();
    }
}
