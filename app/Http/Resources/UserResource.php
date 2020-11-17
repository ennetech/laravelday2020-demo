<?php

namespace App\Http\Resources;

use Ennetech\LaravelRoutingUtilities\HttpContracts\BaseResource;

class UserResource extends BaseResource
{
    public function rules() {
        return [
            'name' => 'string'
        ];
    }
}
