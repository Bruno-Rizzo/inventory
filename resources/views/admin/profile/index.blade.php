@extends('layouts.app')

@section('content')

<div class="main-content">

    <div class="title">
        Perfil
    </div>

    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        Editar Perfil
                    </div>

                    <div class="card-body">
                        
                        <form action="{{route('profile.update', Auth::id())}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mt-3 align-items-center">

                                <div class="col-md-2 text-center mb-5">

                                    <div class="avatar avatar">

                                        <img src="{{ asset('/assets/images/' . Auth::user()->image) }}"
                                            class="avatar-img rounded-circle" width="100px">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <h4 class="mb-1">{{ Auth::user()->name }}</h4>
                                            <p class="mb-3">
                                                <span class="badge rounded-pill bg-secondary p-2">{{ Auth::user()->role->name }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr class="my-4">

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" name="name" value="{{Auth::user()->name}}">
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control form-control" name="email" value="{{Auth::user()->email}}">
                                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Imagem</label>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control form-control" name="image" id="image">
                                    @error('image') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <img style="width:120px" id="showImage">
                            </div>
                            
                            <hr class="my-4">
                            
                            <button type="submit" class="btn btn-primary">Editar Perfil</button>

                        </form>

                    </div>

                </div>

            </div>
            
        </div>
    </div>

</div>
    
@endsection
