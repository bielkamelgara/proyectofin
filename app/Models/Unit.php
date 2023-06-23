<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unit
 *
 * @property $id
 * @property $name
 * @property $area
 * @property $id_building
 * @property $id_employe
 * @property $id_project
 * @property $created_at
 * @property $updated_at
 *
 * @property Building $building
 * @property Employee $employee
 * @property Project $project
 * @property Responsibleunit[] $responsibleunits
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Unit extends Model
{
    
    static $rules = [
		'name' => 'required',
		'area' => 'required',
		'id_building' => 'required',
		'id_employe' => 'required',
		'id_project' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','area','id_building','id_employe','id_project'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function building()
    {
        return $this->hasOne('App\Models\Building', 'id', 'id_building');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne('App\Models\Employee', 'id', 'id_employe');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function project()
    {
        return $this->hasOne('App\Models\Project', 'id', 'id_project');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responsibleunits()
    {
        return $this->hasMany('App\Models\Responsibleunit', 'id_unit', 'id');
    }
    

}
