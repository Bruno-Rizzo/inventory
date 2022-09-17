@extends('layouts.app')

@section('content')

<div class="main-content">

    <div class="title">
        Fornecedores
    </div>

    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        Editar Fornecedor
                    </div>

                    <div class="card-body">
                        
                        <form action="{{route('suppliers.update',$supplier->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" name="name" value="{{$supplier->name}}">
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Celular</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" name="mobile"  value="{{$supplier->mobile}}">
                                    @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control form-control" name="email"  value="{{$supplier->email}}">
                                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label col-form-label">Endereço</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" name="address"  value="{{$supplier->address}}">
                                    @error('address') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label col-form-label">Status</label>
                                <div class="col-sm-6 form-check form-switch" style="padding-left:52px" >
                                    <input type="checkbox" class="form-check-input" id="{{$supplier->id}}" 
                                           name="status" @if($supplier->status==1) {{'checked'}} @endif> 
                                    <label class="form-check-label ms-1" for="{{$supplier->id}}"> Ativo</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-sm btn-primary">  Editar</button>
                                    <a href="{{route('suppliers.index')}}" class="btn btn-sm btn-secondary">  Voltar</a>
                                </div>
                            </div>
                        
                        </form>

                    </div>

                </div>

            </div>
            
        </div>
    </div>

</div>

@endsection