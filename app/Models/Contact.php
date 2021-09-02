<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded= [];

    protected $fillable = ['name','email','company','id','date'];

    public function path()
    {
        return url('/contact/'.$this->path());
    }
}
