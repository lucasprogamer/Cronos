<?php

namespace estoque;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Produto extends Eloquent 
{
	protected $connection = 'mongodb';
	protected $fillable = array(
								'nome',
								'descricao',
								'valor',
								'quantidade'
								);
}
