<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    
    public function index()
    {
        $this->authorize('view',Purchase::class);
        $purchases  = Purchase::all();
        return view('admin.purchases.index',compact('purchases'));
    }

   
    public function create()
    {
        $this->authorize('create',Purchase::class);
        $suppliers  = Supplier::all();
        $categories = Category::all();
        $products   = Product::all();
        $units      = Unit::all();
        return view('admin.purchases.create',compact('suppliers','categories','products','units'));
    }

   
    public function store(Request $request)
    {
        //
    }

  
    public function show(Purchase $purchase)
    {
        //
    }

    
    public function edit(Purchase $purchase)
    {
        //
    }

    
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

   
    public function destroy(Purchase $purchase)
    {
        //
    }
    
}
