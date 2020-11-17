<?php


namespace App\Actions\TestActions;


use App\Actions\Action;
use App\Logic\Cursers\CurserContract;

class ReturnInputWithCurse extends Action
{
    private $curser;

    public function __construct(CurserContract $curser)
    {
        $this->curser = $curser;
    }

    public function handle($input)
    {
        return $this->curser->curse() . " " . $input;
    }
}
