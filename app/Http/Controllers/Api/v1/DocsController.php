<?php


namespace App\Http\Controllers\Api\v1;


class DocsController
{
    /**
     * @method GET
     * @path /
     *
     */
    public function hello()
    {
        return redirect(url('swagger.html') . "?url=" . route('swagger-spec'));
    }

    /**
     * @method GET
     * @path /swagger
     * @name swagger-spec
     * @summary Swagger spec for api
     */
    public function swaggerSpec()
    {
        return \Ennetech\LaravelRoutingUtilities\Documentor\RouteDocumentor::execute("swagger2", [
            "basepath" => "api/v1/",
            "title" => "Magic api docs",
            "description" => "Magic api docs",
            "version" => "1.0.0",
        ]);
    }
}
