<?php

namespace App\Models\Timeline;

use App\Models\User;
use App\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use Likeable;
    use HasFactory;
    protected $fillable=['body','hash','parent_id','status_id' ];
    protected $with=['user'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function parent(){
        return $this->belongsTo(self::class,'parent_id');
    }
    public function childern(){
        return $this->hasMany(self::class,'parent_id');
    }
    public function status(){
        return $this->belongsTo(Status::class); 
    }
     
}
