<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HomeMenuItem extends Model
{

    protected $table = 'home_menu_items';
    public function homeMenu(): BelongsTo
    {
        return $this->belongsTo(HomeMenu::class, 'home_menu_id');
    }
}
