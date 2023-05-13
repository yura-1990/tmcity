<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Standart extends Model
{

    public function standartStatus(): BelongsTo
    {
        return $this->belongsTo(StandartStatus::class);
    }

    public function standartType(): BelongsTo
    {
        return $this->belongsTo(StandartType::class);
    }

    public function classificator(): BelongsTo
    {
        return $this->belongsTo(Classificator::class);
    }


}
