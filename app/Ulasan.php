<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    //Assign dengan nama tabel
    protected $table = 'ulasan';
    public $timestamps = false; //ga ada kolom created_at dan updated_at di tabel users
}