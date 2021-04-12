<?php

namespace App\Models\Timeline;

// use Database\Factories\Timeline\StatusFactory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;
    protected $fillable=['hash','body'];
    // protected $guarded=[];

    public function Published(){
        return $this->created_at->diffForHumans();
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
