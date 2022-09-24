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
}
