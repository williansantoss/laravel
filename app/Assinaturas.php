<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Assinaturas extends Model
{
	public $timestamps = false;
    public $fillable = ['curso_id','user_id'];
}