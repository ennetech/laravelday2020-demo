<?php


namespace App\Actions\TestActions;


use App\Actions\Action;

class ReturnInput extends Action
{
    public function handle($input)
    {
        return $input;
    }
}
