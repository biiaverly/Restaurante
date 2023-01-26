@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card-header">Lista de categorias</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($listacategoria as $key=>$categoria)

                                
                            
                          <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$categoria->nome}}</td>
                            <td>
                                <a href="{{route('categoria.edit',[$categoria->id])}}">
                                    <button class="btn btn-outline-success" >Edit</button>                                                              
                                
                                </a>                                
                            <td><a href="{{route('categoria.edit',[$categoria->id])}}">
                                <button class="btn btn-outline-danger" >Delete</button>                                                              
                            
                            </a></td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
