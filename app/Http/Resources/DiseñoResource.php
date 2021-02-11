<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DiseñoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id
            , 'nombre' => $this->nombre
            , 'color' => $this->color
            , 'archivo' => $this->archivo
            , 'estatus' => $this->estatus
            
            ];
    }
}
