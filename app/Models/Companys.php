<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companys extends Model
{

protected $table = "table_companies";
    //
 protected $fillable = ['name','desc','numEm','ceo'];
 protected $guarded = ['id'];
}
