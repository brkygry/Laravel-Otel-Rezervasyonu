<?php

namespace Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminHomeController;
use PHPUnit\Framework\TestCase;

class HomeControllerTest extends TestCase
{
    public function index()
    {
        echo "Admin Ana Sayfa";
        end();
    }
}
