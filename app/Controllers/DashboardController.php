<?php
// filepath: /d:/Project-project/CI/ci4-webapp/app/Controllers/DashboardController.php
namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}