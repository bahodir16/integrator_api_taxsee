<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderProccessingController extends Controller
{
    public function get_order_info()
    {
        $getOrderObject = json_decode(file_get_contents('orderInfo.json'));
        return response()->json([
            "success"=> 0,
            "message"=> "string",
            "order_info" => $getOrderObject,
            "driver_info"=> [
                "id" => "string",
                "name"=> "string",
                "nick_name"=> "string",
                "phone"=> "string"
            ],
            "auto_info" => [
                "model"=> "string",
                "color"=> "string",
                "number"=> "string"
            ],
            "status" => "New"
        ]);

    }
    public function createOrUpdate(mixed $object, string $api_key)
    {

    }
    public function set_status()
    {

    }
    public function client_coord()
    {

    }
    public function price()
    {

    }
    public function call()
    {

    }
}
