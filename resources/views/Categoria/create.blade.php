@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('categoria.store')}}" method="post">@csrf
            <div class="card">
                <div class="card-header">Categorias de Comida</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class ="btn btn-outline-primary"> Submit </button>
                    </div>

                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
