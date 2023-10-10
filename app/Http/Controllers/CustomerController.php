<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class CustomerController extends Controller
{
    public function index(){
        //
        return Inertia::renred('Customers/index');
    }
    
    public function create(){
        //
        return Inertia::render('Customers/create');
    }
    
    public function store(\Illuminate\Http\Request $request){
        //
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|unique:customers|min:10|max:14',
        ]);
        
        Customer::create($validated);
        
        return redirect::route('customers_index');
    }
}
