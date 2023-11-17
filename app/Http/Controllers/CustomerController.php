<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Resources\CustomerResource;
class CustomerController extends Controller
{
    public function index(){
        return Customer::all();
    }
    public function create(){

    }
    public function edit(){
        
    }
    // public function show($customer){
    //     return Customer::find($customer);
    // }
    public function update(Customer $customer,Request $request){
        $customer->update($request->all());
        return new CustomerResource($customer);
    }
    public function store(Request $request){
        $request->validate([
            'name_customer'=>'required',
            'phone_customer'=>'required',
            'address_customer'=>'required',
            'email_customer'=>'required',
            'city_customer'=>'required'
        ]);
        $customer=Customer::create($request->all());
        return new CustomerResource($customer);
    }
    public function show(Customer $customer){
        return new CustomerResource($customer);
    }
    public function destroy(Customer $customer){
        $customer->delete();
    }
}
