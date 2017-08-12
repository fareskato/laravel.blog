<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // image usr accessor
    public function getImageUrlAttribute(){
//        $imageUrl = "http://via.placeholder.com/750x450";
        $imageUrl = "";
        if(!is_null($this->image)){
            $imagePath = public_path(). DIRECTORY_SEPARATOR . 'img' .DIRECTORY_SEPARATOR. $this->image;
            if(file_exists($imagePath)){
                $imageUrl = asset('img/'.$this->image);
            }
        }
        return $imageUrl;
    }


}
