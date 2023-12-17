<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_nrodoc',
        'person_name',
        'person_firstname',
        'person_lastname',
        'person_bitrhdate',
        'person_email',
        'person_addressmain',
        'sex_id',
        'person_age',
    ];
}
