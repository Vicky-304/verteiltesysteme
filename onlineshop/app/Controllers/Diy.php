<?php
namespace App\Controllers;

use App\Models\MainModel;

class Diy extends BaseController
{
    public function __construct()
    {
        $this->mainModel = new MainModel();
    }

}