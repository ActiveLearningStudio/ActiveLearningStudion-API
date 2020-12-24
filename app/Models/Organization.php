<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\GlobalScope;
use App\Models\DeepRelations\HasManyDeep;
use App\Models\DeepRelations\HasRelationships;

class Organization extends Model
{
    use SoftDeletes, GlobalScope, HasRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'domain',
        'image',
        'parent_id'
    ];

    /**
     * The users that belong to the organization.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'organization_user_roles')->using('App\Models\OrganizationUserRole')->withPivot('organization_role_type_id')->withTimestamps();
    }

    /**
     * Get the projects for the organization.
     */
    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }

    /**
     * Get playlists directly from organizations model via hasManyThrough
     * @return HasManyThrough
     */
    public function playlists()
    {
        return $this->hasManyThrough('App\Models\Playlist', 'App\Models\Project', 'organization_id', 'project_id', 'id', 'id');
    }

    /**
     * Get far away relations data using custom Deep classes
     * @return HasManyDeep
     */
    public function activities()
    {
        return $this->hasManyDeep(
            'App\Models\Activity',
            ['App\Models\Project', 'App\Models\Playlist'], // Intermediate models, beginning at the far parent (Organizations).
            [
                'organization_id', // Foreign key on the "project" table.
                'project_id',    // Foreign key on the "playlist" table.
                'playlist_id'     // Foreign key on the "activity" table.
            ],
            [
                'id', // Local key on the "organizations" table.
                'id', // Local key on the "project" table.
                'id'  // Local key on the "playlist" table.
            ]
        );
    }

    /**
     * Get the children for the organization.
     */
    public function children()
    {
        return $this->hasMany('App\Models\organization', 'parent_id')->with('children');
    }

    /**
     * Get the parent that owns the organization.
     */
    public function parent()
    {
        return $this->belongsTo('App\Models\Organization');
    }
}