<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
   
    public function index()
    {
        $this->authorize('view', Category::class);
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

   
    public function create()
    {
        $this->authorize('create', Category::class);
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', Category::class);
        $validated = $request->validate([
            'name'    => ['required','min:2',Rule::unique('categories')],
        ],[
            'name.unique' => 'Esta categoria já foi cadastrada'
        ]);

        $validated['created_by'] = Auth::id();
        Category::create($validated);

        Alert::toast('Categoria cadastrada com sucesso!', 'success');
        return to_route('categories.index');
    }

   
    public function edit(Category $category)
    {
        $this->authorize('update', Category::class);
        return view('admin.categories.edit',compact('category'));
    }

   
    public function update(Request $request, Category $category)
    {
        $this->authorize('update', Category::class);
        $validated = $request->validate([
            'name'    => ['required','min:2',Rule::unique('categories')->ignore($category->id)],
        ],[
            'name.unique' => 'Esta categoria já foi cadastrada'
        ]);

        $validated['updated_by'] = Auth::id();
        $request->status ? $validated['status'] = 1 : $validated['status'] = 0;
        Category::find($category->id)->update($validated);

        Alert::toast('Categoria editada com sucesso!', 'success');
        return to_route('categories.index');
    }

   
    public function confirm($id)
    {
        $this->authorize('delete', Category::class);
        Alert::error('Excluir Categoria','Deseja realmente excluir esta categoria?')
        ->showConfirmButton('<a href="/categories/delete/'.$id.'" style="text-decoration:none;color:#FFF">Excluir</a>', '#C72826')
        ->showCancelButton('Cancelar', '#3085d6')
        ->reverseButtons();
        return redirect()->back();
    }

    public function delete($id)
    {
        $this->authorize('delete', Category::class);
        Category::find($id)->delete();
        Alert::toast('Categoria excluída com sucesso!', 'success');
        return to_route('categories.index');

    }
    
}
