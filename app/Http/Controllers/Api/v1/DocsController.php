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
     * @description Will auto-generate apidocs using some magic
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

    /**
     * @method GET
     * @path /enumerate
     */
    public function enumerate()
    {
        return \Ennetech\LaravelRoutingUtilities\Enumerator\RoutesEnumerator::enumerate("api/v1/");
    }

    /**
     * @method GET
     * @path /function_with_strange_name
     *
     * @deprecated This crash the system, do not use plz
     */
    public function newFunctionTwo() {

    }
}
