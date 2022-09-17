<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SupplierController extends Controller
{
    
    public function index()
    {
        $this->authorize('view', Supplier::class);
        $suppliers = Supplier::all();
        return view('admin.suppliers.index',compact('suppliers'));
    }

   
    public function create()
    {
        $this->authorize('create', Supplier::class);
        return view('admin.suppliers.create');
    }

   
    public function store(Request $request)
    {
        $this->authorize('create', Supplier::class);
        $validated = $request->validate([
            'name'    => ['required','min:2'],
            'mobile'  => ['required'],
            'email'   => ['email'],
            'address' => ['required'],
        ]);

        $validated['created_by'] = Auth::id();
        Supplier::create($validated);

        Alert::toast('Fornecedor cadastrado com sucesso!', 'success');
        return to_route('suppliers.index');

    }

    
    public function edit(Supplier $supplier)
    {
        $this->authorize('update', Supplier::class);
        return view('admin.suppliers.edit',compact('supplier'));
    }

    
    public function update(Request $request, Supplier $supplier)
    {
        $this->authorize('update', Supplier::class);
        $validated = $request->validate([
            'name'    => ['required','min:2'],
            'mobile'  => ['numeric'],
            'email'   => ['email'],
            'address' => ['required'],
        ]);

        $validated['updated_by'] = Auth::id();
        $request->status ? $validated['status'] = 1 : $validated['status'] = 0;
        Supplier::find($supplier->id)->update($validated);

        Alert::toast('Fornecedor editado com sucesso!', 'success');
        return to_route('suppliers.index');
    }

   
    public function confirm($id)
    {
        $this->authorize('delete', Supplier::class);
        Alert::error('Excluir Fornecedor','Deseja realmente excluir este fornecedor?')
        ->showConfirmButton('<a href="/suppliers/delete/'.$id.'" style="text-decoration:none;color:#FFF">Excluir</a>', '#C72826')
        ->showCancelButton('Cancelar', '#3085d6')
        ->reverseButtons();
        return redirect()->back();
    }

    public function delete($id)
    {
        $this->authorize('delete', Supplier::class);
        Supplier::find($id)->delete();
        Alert::toast('Fornecedor excluído com sucesso!', 'success');
        return to_route('suppliers.index');

    }


}
