<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 *
 * @property $id
 * @property $name
 * @property $budjet
 * @property $id_client
 * @property $id_chief
 * @property $created_at
 * @property $updated_at
 *
 * @property Clientcompany $clientcompany
 * @property Projectchief $projectchief
 * @property Team[] $teams
 * @property Unit[] $units
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Project extends Model
{
    
    static $rules = [
		'name' => 'required',
		'budjet' => 'required',
		'id_client' => 'required',
		'id_chief' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','budjet','id_client','id_chief'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clientcompany()
    {
        return $this->hasOne('App\Models\Clientcompany', 'id', 'id_client');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function projectchief()
    {
        return $this->hasOne('App\Models\Projectchief', 'id', 'id_chief');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teams()
    {
        return $this->hasMany('App\Models\Team', 'id_project', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function units()
    {
        return $this->hasMany('App\Models\Unit', 'id_project', 'id');
    }
    

}
