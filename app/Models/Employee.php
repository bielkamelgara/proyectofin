<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $names
 * @property $surnames
 * @property $phone
 * @property $sex
 * @property $created_at
 * @property $updated_at
 *
 * @property Projectchief[] $projectchiefs
 * @property Responsibleunit[] $responsibleunits
 * @property Unit[] $units
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    static $rules = [
		'names' => 'required',
		'surnames' => 'required',
		'phone' => 'required',
		'sex' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['names','surnames','phone','sex'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectchiefs()
    {
        return $this->hasMany('App\Models\Projectchief', 'id_employe', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responsibleunits()
    {
        return $this->hasMany('App\Models\Responsibleunit', 'id_employe', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function units()
    {
        return $this->hasMany('App\Models\Unit', 'id_employe', 'id');
    }
    

}
