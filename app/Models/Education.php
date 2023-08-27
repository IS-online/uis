<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $fillable = [
        'staff_id', 'institution', 'body', 'title', 'paper_name', 'field',
        'issn', 'isbn', 'doi', 'country', 'city', 'date', 'grade', 'ects', 'review', 'publication'
    ];
    
    public function staff()
    {
        return $this->belongsTo('App\Models\Staff');
    }
    
    
}
