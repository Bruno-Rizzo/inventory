<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class UnitController extends Controller
{
    
    public function index()
    {
        $this->authorize('view', App\Models\Unit::class);
        $units = Unit::all();
        return view('admin.units.index',compact('units'));
    }

   
    public function create()
    {
        $this->authorize('create', App\Models\Unit::class);
        return view('admin.units.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', App\Models\Unit::class);
        $validated = $request->validate([
            'name'    => ['required','min:2',Rule::unique('units')],
        ],[
            'name.unique' => 'Esta unidade já foi cadastrada'
        ]);

        $validated['created_by'] = Auth::id();
        Unit::create($validated);

        Alert::toast('Unidade cadastrada com sucesso!', 'success');
        return to_route('units.index');
    }

   
    public function edit(Unit $unit)
    {
        $this->authorize('update', App\Models\Unit::class);
        return view('admin.units.edit',compact('unit'));
    }

   
    public function update(Request $request, Unit $unit)
    {
        $this->authorize('update', App\Models\Unit::class);
        $validated = $request->validate([
            'name'    => ['required','min:2',Rule::unique('units')->ignore($unit->id)],
        ],[
            'name.unique' => 'Esta unidade já foi cadastrada'
        ]);

        $validated['updated_by'] = Auth::id();
        $request->status ? $validated['status'] = 1 : $validated['status'] = 0;
        Unit::find($unit->id)->update($validated);

        Alert::toast('Unidade editada com sucesso!', 'success');
        return to_route('units.index');
    }

   
    public function confirm($id)
    {
        $this->authorize('delete', App\Models\Unit::class);
        Alert::error('Excluir Unidade','Deseja realmente excluir esta unidade?')
        ->showConfirmButton('<a href="/units/delete/'.$id.'" style="text-decoration:none;color:#FFF">Excluir</a>', '#C72826')
        ->showCancelButton('Cancelar', '#3085d6')
        ->reverseButtons();
        return redirect()->back();
    }

    public function delete($id)
    {
        $this->authorize('delete', App\Models\Unit::class);
        Unit::find($id)->delete();
        Alert::toast('Unidade excluída com sucesso!', 'success');
        return to_route('units.index');

    }

}
