<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Contact extends JsonResource
{

    public function toArray($request)
    {
        return [
           'data'=>[
               'id'=>$this->id,
               'name'=>$this->name,
               'email'=> $this->email,
               'date'=>$this->date,
               'company'=>$this->company
           ],
            'links'=>[

            ]
        ];
    }
}
