<?php


namespace App\Http\Controllers\Api\v1;


use App\Http\Requests\ExampleRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

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


    /**
     * @method POST
     * @path /personalized
     *
     * @return string[]
     */
    public function personalizedHello(ExampleRequest $request)
    {
        return [$request->getFullName()];
    }

    /**
     * @method GET
     * @path /{greeting}
     *
     * @where greeting=[a-z]+
     *
     * @return string[]
     */
    public function greetedHello($greeting)
    {
        return [$greeting];
    }

    /**
     * @method GET
     * @path /user
     *
     */
    public function user() : UserResource
    {
        return new UserResource(new \stdClass());
    }

    /**
     * @method GET
     * @path /users
     *
     * @returnArray
     * @return \App\Http\Resources\UserResource|AnonymousResourceCollection
     */
    public function users()
    {
        return UserResource::collection(collect([]));
    }
}
