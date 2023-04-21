<?php

namespace App\Models;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(user::class) ; 
    } 


   protected $fillable = [
                  'name',
                  'lastName',
                  'email',
                  'phone',
                  'sex',
                  'status',
                  'titleOfTheCase',
                  'user_id'
   ];

}