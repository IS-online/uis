<?php

namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffAcademicInfo extends Model
{
    //model za unos podataka za academic info

    protected $table = 'staffacademicinfo';

    protected $fillable = [
        'staff_id', 'created_by', 'last_updated_by', 'institucija', 'tjelo', 'zvanje',
        'naziv_rada', 'oblast', 'issn', 'isbn', 'doi', 'država', 'mjesto', 'datum',
        'ocjena', 'ects', 'recenzija', 'publikacija'
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id', 'id');
    }
}
