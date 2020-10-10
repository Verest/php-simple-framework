<?php 

namespace App\Controllers;

class MainController
{
    public function index()
    {
        return response('view', [
            "view" => "main/index.php",
            "args" => [
                "defaultPage" => "This is the default page."
            ]
        ]);
    }
}