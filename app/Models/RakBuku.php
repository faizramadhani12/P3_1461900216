<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RakBuku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    public $timestamp = false;

    protected $filelable = ['id_buku', 'id_jenis_buku'];
}
