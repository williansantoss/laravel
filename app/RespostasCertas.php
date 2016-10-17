<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class RespostasCertas extends Model
{
	public $timestamps = false;
    public $fillable = ['alternativa_id'];
}