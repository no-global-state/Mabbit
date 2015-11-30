<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    /**
     * {@inheritDoc}
     */
    protected $table = 'system_issues';

    /**
     * {@inheritDoc}
     */
    protected $fillable = [
        'user_id',
        'name', 
        'description',
        'solved'
    ];

    /**
     * Fetch all tags associated with a model
     * 
     * @return array
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    /**
     * Implementation for tag_list magic property 
     * 
     * @return array
     */
    public function getTagListAttribute()
    {
        return $this->tags()->lists('id')->toArray();
    }

    /**
     * Fetches latest issues
     * 
     * @param boolean|null $solved Whether to fetch only solved ones
     * @return array
     */
    public static function getLatests($solved = null)
    {
        $userId = \Auth::user()->id;

        if (is_bool($solved)) {
            $operator = $solved === true ? '=' : '!=';
            return self::where('solved', $operator, '1')->andWhere('user_id', $userId)->latest('id');
        } else if (is_null($solved)) {
            return self::where('user_id', $userId)->latest('id');
        } else {
            // Undefined argument type supplied
        }
    }
}
