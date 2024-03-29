<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'age', 'address', 'telephone'
    ];

}
