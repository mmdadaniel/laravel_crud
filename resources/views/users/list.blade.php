@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('users/new') }}">Novo usuário</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Lista dos usuários no sistema</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ações</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach($usuarios as $u)
                            <tr>
                            <th scope="row">{{ $u->id }}</th>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>
                                <a href="users/{{ $u->id }}/edit" class="btn btn-info">Editar</a>
                            </td>
                            <td>
                                <form action="users/delete/{{ $u->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
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
