<?php

namespace App\Http\Resources;

use ArrayAccess;
use JsonSerializable; 

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\DelegatesToResource;
use Illuminate\Support\Collection;
use Illuminate\Container\Container;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\MissingValue;
use Illumminate\Support\Http\MergeValue;
use Illuminate\Contracts\Routing\UrlRouting;

class ProductResource extends JsonResource
{
    public function toArray($request) {
    
        return [    
        
            'name' => $this->name,
            'email'=> $this->email 
        ];
    }
}