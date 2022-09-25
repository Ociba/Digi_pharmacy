<?php

namespace Modules\Farm\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Farm\Entities\FarmCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function getCategory()
    {
        return view('farm::category',[
            'categories'=>FarmCategory::getCategories()
        ]);
    }
    /**
     * This function creates farm category
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'category_name'     => 'required|unique:farm_categories,category_name',
        ]);

        FarmCategory::createCategory(request()->category_name);
        return redirect()->back()->with('msg','Operation Successful');
    }
    /**
     * This function gets edit form
     */
    public function getEditForm(){
        return view('farm::edit_category_form',[
            'edit_category'=>FarmCategory::editCategoryForm(request()->category_id)
        ]);
    }

    /**
     * This function updates Category
     */
    public function updateCategory(){
        FarmCategory::updateFarmCategory(request()->category_id,request()->category_name);
        return redirect('/farm/farm-category')->with('msg','Operation Successful');
    }
    /**
     * This function deletes Category
     */
    public function delete(){
        FarmCategory::deleteCategory(request()->category_id);
        return redirect()->back()->with('msg','Operation Successful');
    }
}
