<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'name', 'type', 'currency', 'enabled', 'branch_id', 'company_id'
    ];

    public function trades()
    {
        return $this->hasMany('App\Models\Trade', 'project_id');
    }
}
