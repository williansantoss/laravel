<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
	public $timestamps = false;
    public $fillable = ['nome'];
}