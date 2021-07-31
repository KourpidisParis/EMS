<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Premission;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function storeRole($data){
        return Role::create($data);

    }

    public function permission(){
        return $this->hasOne(Premission::class);
    }
}
