<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'produtos';
	protected $fillable = array(
								'nome',
								'descricao',
								'valor',
								'quantidade'
								);
	protected $guarded = ['id'];
}
