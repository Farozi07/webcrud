<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
    use HasFactory;
    protected $fillable = ['imei','merek','nama','status','jumlah','harga'];
    use SoftDeletes;

}
