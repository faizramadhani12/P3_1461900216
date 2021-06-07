<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBuku extends Model
{
    use HasFactory;

    protected $table = 'jenis_buku';

    public $timestamp = false;

    protected $filelable = ['jenis'];
}
