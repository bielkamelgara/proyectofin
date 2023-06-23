<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Building
 *
 * @property $id
 * @property $address
 * @property $phone
 * @property $created_at
 * @property $updated_at
 *
 * @property Unit[] $units
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Building extends Model
{
    
    static $rules = [
		'address' => 'required',
		'phone' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['address','phone'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function units()
    {
        return $this->hasMany('App\Models\Unit', 'id_building', 'id');
    }
    

}
