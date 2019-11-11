<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Event;

class Organizer extends Authenticatable
{
    protected $table = "organizers";
    protected $guard = "organizer";
    protected $fillable = ["id", "name", "email", "password_hash"];
    protected $hidden = ['password_hash'];

    public function getAuthPassword() {
        return $this->password_hash;
    }

    public $timestamps = false;

    // lien ket toi events
    public function events()
    {
    	return $this->hasMany(Event::class);
    }
}
