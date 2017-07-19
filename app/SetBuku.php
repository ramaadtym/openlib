<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SetBuku extends Model
{
    //Assign dengan nama tabel

    protected $table = 'pinjam';
    public $timestamps = false; //ga ada kolom created_at dan updated_at di tabel users
}
