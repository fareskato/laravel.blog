<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

//  Relationship with author(user model)
    public function author(){
        return $this->belongsTo(User::class);
    }

    // image usr accessor
    public function getImageUrlAttribute(){
//        $imageUrl = "http://via.placeholder.com/750x450";
        $imageUrl = "";
        if(!is_null($this->image)){
            $imagePath = public_path('img' .DIRECTORY_SEPARATOR. $this->image) ;
            if(file_exists($imagePath)){
                $imageUrl = asset('img/'.$this->image);
            }
        }
        return $imageUrl;
    }

    // date accessor
    public function getDateAttribute(){
        return $this->created_at->diffForHumans();
    }



}
