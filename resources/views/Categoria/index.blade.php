@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card-header">Lista de categorias</div>

                <div class="card-body">
                    @foreach ($listacategoria as $categoria)
                        <p>{{$categoria->nome}}</p>                        
                    @endforeach
                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
