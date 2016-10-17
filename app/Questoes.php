<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Questoes extends Model
{
	public $timestamps = false;
    public $fillable = ['descricao_pergunta'];
}