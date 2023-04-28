<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Client;


class Affaire extends Model
{
    use HasFactory;


    protected $fillable = [
        'Name',
        'Description',
        'status',
        'client_id'
];



public function client(){
    return $this->belongsTo(Client::class);
}

}
