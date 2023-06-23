<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clientcompany
 *
 * @property $id
 * @property $name
 * @property $phone
 * @property $contact_name
 * @property $created_at
 * @property $updated_at
 *
 * @property Project[] $projects
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Clientcompany extends Model
{
    
    static $rules = [
		'name' => 'required',
		'phone' => 'required',
		'contact_name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','phone','contact_name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany('App\Models\Project', 'id_client', 'id');
    }
    

}
