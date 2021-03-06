<?php

namespace App\Models\Timeline;

// use Database\Factories\Timeline\StatusFactory;
use App\Models\Like;
use App\Models\User;
use App\Traits\Likeable;
use App\Models\Timeline\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use Likeable;
    use HasFactory;
    protected $fillable=['hash','body'];
    // protected $guarded=[];
    protected $withCount=['comments'];
    
    public function published(){
        return $this->created_at->diffForHumans();
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
  
}
