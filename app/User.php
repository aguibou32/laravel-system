<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Student;
use App\Lecturer;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'profile_type', 'password'
    ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array 
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Thanks to to the $with attribute, whenever we get a user, we will also get the profile fields
    protected $with =['profile'];
    
    // Calling this method on a user output true or false. It makes it easy to know what type of user profile we are dealing with. To call the method: User::find(1)->hasAdministratorProfile();
    public function getHasAdministratorProfileAttribute(){
        return $this->profile_type == 'App\Administrator';
    }

    
    // Calling this method on a user output true or false. It makes it easy to know what type of user profile we are dealing with. To call the method: User::find(1)->hasStudentProfile();
    public function getHasStudentProfileAttribute(){
        return $this->profile_type == 'App\Student';
    }

    // Same as above method but for lecturer;
    public function getHasLecturerProfileAttribute(){
        return $this->profile_type == 'App\Lecturer';
    }

    public function profile(){
        return $this->morphTo();
    }

}


// php artisan tinker
// User::find(1); // This will output the first user
// User::find(1)->hasStudentProfile(); // Will use the method above
// $students = User::where(‘profile_type’,’App\Student)->get(); // Get all the students from the user table
    // where the profile type is student;
