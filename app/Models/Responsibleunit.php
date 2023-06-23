<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Responsibleunit
 *
 * @property $id
 * @property $name
 * @property $Phone
 * @property $sexo
 * @property $id_unit
 * @property $created_at
 * @property $updated_at
 *
 * @property Unit $unit
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Responsibleunit extends Model
{
    
    static $rules = [
		'name' => 'required',
		'Phone' => 'required',
		'sexo' => 'required',
		'id_unit' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','Phone','sexo','id_unit'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unit()
    {
        return $this->hasOne('App\Models\Unit', 'id', 'id_unit');
    }
    

}
