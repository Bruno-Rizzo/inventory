@extends('layouts.app')

@section('content')

<div class="main-content">

    <div class="title">
        Categorias
    </div>

    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        Lista de Categorias
                    </div>

                    <div class="card-body">
                        
                        <div class="table-responsive">

                            <table id="example" class="display nowrap" style="width:100%">

                                @can('create', App\Models\Category::class)
                                <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary mb-4"> + Nova Categoria</a>
                                @endcan

                                <thead>

                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nome</th>
                                        <th class="text-center">Status</th>
                                        @can('update', App\Models\Category::class)
                                        <th class="text-center">Editar</th>
                                        @endcan
                                        @can('delete', App\Models\Category::class)
                                        <th class="text-center">Excluir</th>
                                        @endcan
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($categories as $category)

                                        <tr>
                                            <td class="text-center">{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td class="text-center"> @if( $category->status == 1 )
                                                <span class="badge rounded-pill bg-success">{{'ativo'}}</span> 
                                                @else
                                                <span class="badge rounded-pill bg-danger">{{'inativo'}}</span>
                                                @endif
                                            </td>
                                            @can('update', App\Models\Category::class)
                                            <td class="text-center">
                                                <a href="{{ route('categories.edit', $category->id) }}"
                                                   class="text-success" style="text-decoration: none">
                                                    <i class="ti-pencil-alt" style="font-size: 19px"></i>
                                                </a>
                                            </td>
                                            @endcan
                                            @can('delete', App\Models\Category::class)
                                            <td class="text-center">
                                                <a href="{{route('categories.confirm',$category->id)}}" class="text-danger"
                                                   style="text-decoration: none">
                                                    <i class="ti-trash" style="font-size: 19px"></i>
                                                </a>
                                            </td>
                                            @endcan
                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>
            
        </div>
        
    </div>

</div>

@endsection

