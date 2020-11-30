<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToolStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'secured'
    ];

    public function box()
    {
        return $this->hasOne(ToolBox::class, 'toolbox_id', 'toolbox_id');
    }

    public function employee()
    {
        return $this->hasOne(Employee::class, 'id', 'employee_id');
    }
}
