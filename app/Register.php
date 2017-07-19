<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    //Assign dengan tabel user (soalnya nama tabelnya buka Register)

    protected $table = 'users';
    public $timestamps = false; //ga ada kolom created_at dan updated_at di tabel users
}
