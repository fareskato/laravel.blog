<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $dates =['published_at'];

    /**
     * Relationship with author(user model)
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(){
        return $this->belongsTo(User::class);
    }

    /*
     * Post author image accessor
     */
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

    /*
     * Post date accessor
     */
    public function getDateAttribute(){
        return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

    /*
     * Latest posts scope
     */
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /*
 * Published posts scope
 */
    public function scopePublished($query)
    {
        return $query->where('published_at', '<=' , Carbon::now());
    }


}
