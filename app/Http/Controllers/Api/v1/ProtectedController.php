<?php


namespace App\Http\Controllers\Api\v1;

/**
 * @middleware authy
 * @resource
 *
 * @description This controller is protected
 */
class ProtectedController
{
    public function index()
    {
        return ["index"];
    }

    public function store()
    {
        return ["store"];
    }

    public function show()
    {
        return ["show"];
    }

    public function update()
    {
        return ["update"];
    }

    public function destroy()
    {
        return ["destroy"];
    }
}
