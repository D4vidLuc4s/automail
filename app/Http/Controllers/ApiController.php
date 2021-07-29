<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
* Class ApiController
*
* @package App\Http\Controllers
*
* @SWG\Swagger(
*     basePath="",
*     host="0.0.0.0:8025",
*     schemes={"http"},
*     @SWG\Info(
*         version="2.0",
*         title="iShop API",
*         @SWG\Contact(name="Pek Ratanak", url="https://www.google.com"),
*     ),
*     @SWG\Definition(
*         definition="Error",
*         required={"code", "message"},
*         @SWG\Property(
*             property="code",
*             type="integer",
*             format="int32"
*         ),
*         @SWG\Property(
*             property="message",
*             type="string"
*         )
*     )
* )
*/

class ApiController extends Controller
{
    //
}
