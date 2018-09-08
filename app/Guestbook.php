<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guestbook extends Model
{
    /**
     * Whats our table
     * 
     * @var string
     */
    protected $table = 'guestbook';

    /**
     * Whats fillable
     * 
     * @var array
     */
    protected $fillable = ['user_id', 'message', 'created_at', 'updated_at'];

    /**
     * Tell eloquent we use timestamps
     * 
     * @var bool
     */
    public $timestamps = true;

    /**
     * Set our validation rules
     * 
     * @return array
     */
    public static function validation()
    {
        return [
            'user_id' => 'require|numeric',
            'message' => 'required|string'
        ];
    }

    /**
     * Link our user
     * 
     * @return HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
