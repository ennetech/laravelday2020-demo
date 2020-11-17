<?php


namespace App\Http\Controllers\Api\v1;


class HelloController
{
    /**
     * @method GET
     * @path /
     *
     * @return string[]
     */
    public function hello()
    {
        return ["hello!"];
    }
}
