<?php namespace Miroc\LaravelAdminer;

use Illuminate\Routing\Controller;

class AdminerController extends Controller
{
    public function index()
    {
        require('adminer-4.2.5-en.php');
        return new EmptyResponse();
    }
}
