<?php

namespace App\Models\Timeline;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=['body','hash','parend_id' ];

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
