<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Cabasa extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         // return parent::toArray($request);                // this is the resource file and this line of code will return every item in the databse in an array

        return [                                            // the lines of codes in this array block will only return what we specified in it
            'id' => $this->id,
            // 'name' => $this->name,
            // 'email' => $this->email,
            // 'password' => $this->password,
            'hallName' => $this->hallName,
            'capacity' => $this->capacity,
            'reason' => $this->reason,
            'status' => $this->status
        ];
    }

    public function with($request){
        return [
            'Version' => '1.0.0',
            'author_name' => 'Dennis'
        ];
    }
}
