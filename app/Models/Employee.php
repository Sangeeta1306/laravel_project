<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Employee extends Model
{
    use HasFactory;
 
    protected $fillable = [
         
        'id',
        'fname',
        'lname', 
        'company',
        'email',
        'phone',
       
    ];
 
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}