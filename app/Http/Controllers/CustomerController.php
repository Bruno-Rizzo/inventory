<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    
    public function index()
    {
        $this->authorize('view', Customer::class);
        $customers = Customer::all();
        return view('admin.customers.index',compact('customers'));
    }

   
    public function create()
    {
        $this->authorize('create', Customer::class);
        return view('admin.customers.create');
    }

   
    public function store(Request $request)
    {
        $this->authorize('create', Customer::class);
        $validated = $request->validate([
            'name'    => ['required','min:5'],
            'mobile'  => ['numeric'],
            'email'   => ['email'],
            'address' => ['required'],
        ]);

        $validated['created_by'] = Auth::id();
        Customer::create($validated);

        Alert::toast('Cliente cadastrado com sucesso!', 'success');
        return to_route('customers.index');

    }

    
    public function edit(Customer $customer)
    {
        $this->authorize('update', Customer::class);
        return view('admin.customers.edit',compact('customer'));
    }

    
    public function update(Request $request, Customer $customer)
    {
        $this->authorize('update', Customer::class);
        $validated = $request->validate([
            'name'    => ['required','min:5'],
            'mobile'  => ['numeric'],
            'email'   => ['email'],
            'address' => ['required'],
        ]);

        $validated['updated_by'] = Auth::id();
        $request->status ? $validated['status'] = 1 : $validated['status'] = 0;
        Customer::find($customer->id)->update($validated);

        Alert::toast('Cliente editado com sucesso!', 'success');
        return to_route('customers.index');
    }

   
    public function confirm($id)
    {
        $this->authorize('delete', Customer::class);
        Alert::error('Excluir Cliente','Deseja realmente excluir este cliente?')
        ->showConfirmButton('<a href="/customers/delete/'.$id.'" style="text-decoration:none;color:#FFF">Excluir</a>', '#C72826')
        ->showCancelButton('Cancelar', '#3085d6')
        ->reverseButtons();
        return redirect()->back();
    }

    public function delete($id)
    {
        $this->authorize('delete', Customer::class);
        Customer::find($id)->delete();
        Alert::toast('Cliente excluído com sucesso!', 'success');
        return to_route('customers.index');

    }

}
