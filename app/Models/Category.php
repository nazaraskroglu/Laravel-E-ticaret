<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

   #parent'ın erişebilmesi için ekledik.
    protected $appends = [
      'parent',
    ];

    protected $table = 'categories';
    protected $fillable = [
    'parent_id',
    'title',
    'slug',
    'description',
    'status',
    'meta_title',
    'meta_descrip',
    'meta_keywords',
    ];

    #one to many
   public function products()
  {
    return $this->hasMany(Product::class,"category_id","category_id");
  }

    #one to many Inverse
    public function parent()
    {
      return $this->belongsTo(Category::class,'parent_id');
    }
    public function children()
    {
      return $this->hasMany(Category::class,'parent_id');
    }



}
