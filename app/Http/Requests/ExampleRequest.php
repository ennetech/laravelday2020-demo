<?php


namespace App\Http\Requests;


class ExampleRequest extends \Ennetech\LaravelRoutingUtilities\HttpContracts\BaseRequest
{
    public function rules()
    {
        return [
            'name' => 'string|required',
            'surname' => 'string'
        ];
    }

    public function getFullName()
    {
        return trim($this->input('name') . " " . $this->input('surname'));
    }
}
