<?php namespace Watchlearn\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // protected $jsonable = ['actors'];

    /* Relations */ 

    public $belongsToMany = [
        'genres' => [
            '\Watchlearn\Movies\Models\Genre',
            'table' => 'watchlearn_movies_movies_genres',
            'order' => 'genre_title'
        ],
        'actors' =>[
            'Watchlearn\Movies\Models\Actor',
            'table' => 'watchlearn_movies_actors_movies',
            'order' => 'first_name'
        ]
    ];

    // image At once

    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    // Images collection

    public $attachMany = [
        'movie_gallery' => 'System\Models\File'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'watchlearn_movies_';
}
