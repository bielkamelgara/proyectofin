<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 *
 * @property $id
 * @property $names
 * @property $surnames
 * @property $sex
 * @property $id_project
 * @property $created_at
 * @property $updated_at
 *
 * @property Project $project
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Team extends Model
{
    
    static $rules = [
		'names' => 'required',
		'surnames' => 'required',
		'sex' => 'required',
		'id_project' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['names','surnames','sex','id_project'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function project()
    {
        return $this->hasOne('App\Models\Project', 'id', 'id_project');
    }
    

}
