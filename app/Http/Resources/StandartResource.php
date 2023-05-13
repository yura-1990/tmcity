<?php

namespace App\Http\Resources;

use App\Models\Classificator;
use App\Models\Standart;
use App\Models\StandartStatus;
use App\Models\StandartType;
use Illuminate\Http\Resources\Json\JsonResource;

class StandartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'text_uz' => $this->text_uz,
            'text_oz' => $this->text_oz,
            'text_ru' => $this->text_ru,
            'text_en' => $this->text_en,
            'number' => $this->number,
            'year' => $this->year,
            'language' => $this->language,
            'rule' => $this->rule,
            'rule_start_data' => $this->rule_start_data,
            'rule_execute_data' => $this->rule_execute_data,
            'rule_finish_data' => $this->rule_finish_data,
            'standart_type_id' => StandartType::query()->find($this->standart_type_id),
            'standart_status_id' => StandartStatus::query()->find($this->standart_status_id),
            'classificator_id' => Classificator::query()->find($this->classificator_id),
        ];
    }
}
