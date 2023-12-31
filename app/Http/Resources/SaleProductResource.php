<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SaleProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "sale_price" => $this->sale_price,
            "photo" => $this->photo,
            "brand_id" => $this->brand_id,
            "brand_name" => $this->brand->name
        ];
    }
}
