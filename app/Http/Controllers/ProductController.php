<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Unit;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    
    public function index()
    {
        $this->authorize('view', App\Models\Product::class);
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    
    public function create()
    {
        $this->authorize('create', App\Models\Product::class);
        $suppliers  = Supplier::all();
        $categories = Category::all();
        $unities    = Unit::all();
        return view('admin.products.create',compact('suppliers','categories','unities'));
    }

    
    public function store(Request $request)
    {
        $this->authorize('create', App\Models\Product::class);
        $validated = $request->validate([
            'name'        => ['required','min:3',Rule::unique('products')], 
            'supplier_id' => ['required'], 
            'category_id' => ['required'], 
            'unit_id'     => ['required'], 
            'quantity'    => ['required'], 
        ],[
            'name.unique'          => 'Este produto já foi cadastrado',
            'supplier_id.required' => 'O campo fornecedor é obrigatório',
            'category_id.required' => 'O campo categoria é obrigatório',
            'unit_id.required'     => 'O campo unidade é obrigatório',
            'quantity.required'    => 'O campo quantidade é obrigatório'
        ]);

        $validated['created_by'] = Auth::id(); 
        Product::create($validated);

        Alert::toast('Produto cadastrado com sucesso!', 'success');
        return to_route('products.index');
    }

    
    public function edit(Product $product)
    {
        $this->authorize('update', App\Models\Product::class);
        $suppliers  = Supplier::all();
        $categories = Category::all();
        $unities    = Unit::all();
        return view('admin.products.edit',compact('product','suppliers','categories','unities'));
    }

    
    public function update(Request $request, Product $product)
    {
        $this->authorize('create', App\Models\Product::class);
        $validated = $request->validate([
            'name'        => ['required','min:3',Rule::unique('products')->ignore($product->id)], 
            'supplier_id' => ['required'], 
            'category_id' => ['required'], 
            'unit_id'     => ['required'], 
            'quantity'    => ['required'], 
        ],[
            'name.unique'          => 'Este produto já foi cadastrado',
            'supplier_id.required' => 'O campo fornecedor é obrigatório',
            'category_id.required' => 'O campo categoria é obrigatório',
            'unit_id.required'     => 'O campo unidade é obrigatório',
            'quantity.required'    => 'O campo quantidade é obrigatório'
        ]);

        $validated['updated_by'] = Auth::id(); 
        $request->status ? $validated['status'] = 1 : $validated['status'] = 0;
        Product::find($product->id)->update($validated);

        Alert::toast('Produto Editado com sucesso!', 'success');
        return to_route('products.index');
    }

    
    public function confirm($id)
    {
        $this->authorize('delete', App\Models\Product::class);
        Alert::error('Excluir Produto','Deseja realmente excluir este produto?')
        ->showConfirmButton('<a href="/products/delete/'.$id.'" style="text-decoration:none;color:#FFF">Excluir</a>', '#C72826')
        ->showCancelButton('Cancelar', '#3085d6')
        ->reverseButtons();
        return redirect()->back();
    }

    public function delete($id)
    {
        $this->authorize('delete', App\Models\Product::class);
        Unit::find($id)->delete();
        Alert::toast('Produto excluído com sucesso!', 'success');
        return to_route('products.index');

    }

}
