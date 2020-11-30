<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cost',
        'secured'
    ];

    public function box()
    {
        return $this->belongsTo(ToolBox::class, 'toolbox_id', 'toolbox_id');
    }
}
