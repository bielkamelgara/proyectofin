<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Projectchief
 *
 * @property $id
 * @property $name
 * @property $phone
 * @property $sex
 *
 * @property Project[] $projects
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Projectchief extends Model
{
    
    static $rules = [
		'name' => 'required',
		'phone' => 'required',
		'sex' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','phone','sex'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany('App\Models\Project', 'id_chief', 'id');
    }
    

}
