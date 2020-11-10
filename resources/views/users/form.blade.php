@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Cadastro de novo usuário:</h3>
                    <form action="{{ url('users/add') }}" method="POST">
                        @csrf
                          <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" name="name" class="form-control" />
                          </div>
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" />
                          </div>
                          <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
