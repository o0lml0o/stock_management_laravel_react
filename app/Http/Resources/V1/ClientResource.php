<?php

namespace App\Http\Resources\V1;

use App\Models\Order;
use App\Models\Store;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            'name'=>$this->name,
            'last_name'=>$this->last_name,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'storeName'=>Store::find($this->store_id)->name,
            'type'=>$this->role_id=1?'client':'vendor',
            'orders'=>OrderResource::collection($this->whenLoaded('orders'))

        ];

    }
}
