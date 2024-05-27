<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NilaiResource extends JsonResource
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
            'nama' => $this->nama,
            'nilai' => $this->nilai,
            'foto' => $this->foto,
            'jurusans' => [
                'id' => $this->jurusans->id,
                'nama' => $this->jurusans->nama,
            ],
        ];
    }
}
