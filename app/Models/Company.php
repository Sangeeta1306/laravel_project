<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
    
    
class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'cname',
        'email',
        'logo',
        'website',
    ];
 
    public function employee()
    {
        return $this->hasMany(Employee::class, 'company', 'id');
    }

}
