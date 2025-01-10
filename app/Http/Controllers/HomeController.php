<?php

namespace App\Http\Controllers;

use App\Models\{Role, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Home";

        return view("/home/index", compact("title"));
    }

    public function customers()
    {
        $this->authorize("is_admin");

        $title = "Customers";
        $customers = User::with("role")->get();

        return view("home/customers",  compact("title", "customers"));
    }
    
    public function supplierDashboard()
    {
        // dd(auth()->user()->role->name);
        $this->authorize('is_supplier'); 

        $title = "Supplier Dashboard";
        // $data = []; 

        return view("partials.home.home_suppliers", compact("title"));
    }

    public function showSupplierPage()
    {
        $title = "Add Supplier";

        return view("partials.add_suppliers", compact("title"));
    }
}
