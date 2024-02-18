<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $fillable = [
        'abbr', 'locale','name','direction','active','created_at','updated_at',
    ];
    /**Get Active Column function */
    public function scopActive($query)
    {
        return $query->where('acitve',1);
    }
    /**Select All Languages */
    public function scopeSelect($query)
    {
        return $query->select('id','abbr', 'name', 'direction', 'active');
    }
    //Get Active Lanugage
    public function getActive()
    {
        return   $this -> active == 1 ? 'مفعل'  : 'غير مفعل';
    }
}
