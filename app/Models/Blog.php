<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $blog,$image,$imageName,$dir,$imageUrl;
    public static function newBlog($request)
    {

        self::$image      =$request->file('image');
        self::$imageName  =self::$image->getClientOriginalName();
        self::$dir        ='uploads/blog-images/';
        self::$image->move(self::$dir,self::$imageName);
        self::$imageUrl   =self::$dir.self::$imageName;

        self::$blog =new Blog();
        self::$blog->category_id   =$request->category_id;
        self::$blog->title          =$request->title;
        self::$blog->description   =$request->description;
        self::$blog->image         =self::$imageUrl;
        self::$blog->status        =$request->status;
        self::$blog->save();
    }
    public static function blogUpdate( $request,$id)
    {
        self::$blog = Blog::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$blog->image))
            {

             unlink(self::$blog->image);

            }
            self::$image      =$request->file('image');
            self::$imageName  =self::$image->getClientOriginalName();
            self::$dir        ='uploads/blog-images/';
            self::$image->move(self::$dir,self::$imageName);
            self::$imageUrl   =self::$dir.self::$imageName;
            self::$blog->image         =self::$imageUrl;
        }

            self::$blog->category_id   =$request->category_id;
            self::$blog->title          =$request->title;
            self::$blog->description   =$request->description;
            self::$blog->status        =$request->status;
            self::$blog->save();

    }
    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image))
        {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }



    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
