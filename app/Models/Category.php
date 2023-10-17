<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category,$image,$imageName,$dir,$imageUrl;
    public static function newCategory($request)
    {

        self::$image      =$request->file('image');
        self::$imageName  =self::$image->getClientOriginalName();
        self::$dir        ='uploads/category-images/';
        self::$image->move(self::$dir,self::$imageName);
        self::$imageUrl   =self::$dir.self::$imageName;

        self::$category =new Category();
        self::$category->name          =$request->name;
        self::$category->description   =$request->description;
        self::$category->image         =self::$imageUrl;
        self::$category->status        =$request->status;
        self::$category->save();
    }

    public static function newUpdate( $request,$id)
    {
        self::$category = Category::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$category->image))
            {

             unlink(self::$category->image);

            }
            self::$image      =$request->file('image');
            self::$imageName  =self::$image->getClientOriginalName();
            self::$dir        ='uploads/category-images/';
            self::$image->move(self::$dir,self::$imageName);
            self::$imageUrl   =self::$dir.self::$imageName;
            self::$category->image         =self::$imageUrl;
        }
            self::$category->name          =$request->name;
            self::$category->description   =$request->description;
            self::$category->status        =$request->status;
            self::$category->save();

    }
    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        if (file_exists(self::$category->image))
        {
            unlink(self::$category->image);
        }
        self::$category->delete();
    }
}
