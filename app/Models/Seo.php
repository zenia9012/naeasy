<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use CrudTrait;

    protected $fillable = [
    	'name_page', 'slug_page', 'title', 'key_words', 'description'
    ];
}
