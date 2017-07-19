<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //Assign dengan nama tabel
    protected $table = 'users';
    public $timestamps = false; //ga ada kolom created_at dan updated_at di tabel users
}