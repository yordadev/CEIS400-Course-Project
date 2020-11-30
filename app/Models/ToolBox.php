<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToolBox extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function tools()
    {
        return $this->hasMany(Tools::class, 'toolbox_id', 'toolbox_id');
    }
}
