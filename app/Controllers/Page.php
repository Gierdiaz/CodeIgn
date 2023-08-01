<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index()
    {
        return $this->response->setJSON('body')->setStatusCode(200);
    }
}
