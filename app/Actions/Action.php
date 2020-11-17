<?php

namespace App\Actions;

class Action
{
    /**
     * @return mixed
     * @throws \ErrorException
     */
    public static function run()
    {
        $class = static::class;
        $action = app()->make($class);
        $response = $action->handle(...func_get_args());

        if (!isset($response)) {
            $name = get_class($action);
            $name = explode("\\", $name);
            $name = end($name);

            throw new \ErrorException("Action {$name} has returned invalid response code");
        }

        return $response;
    }
}
