<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        return $this->response->setJSON('data')->setStatusCode(200);
    }
}
