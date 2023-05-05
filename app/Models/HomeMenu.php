<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class HomeMenu extends Model
{
    protected $table = 'home_menus';

    public function homeMenuItems(): HasMany
    {
        return $this->hasMany(HomeMenuItem::class,'home_menu_id');
    }
}
