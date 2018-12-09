@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">CadastroFuncionario {{ $cadastrofuncionario->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/cadastro-funcionario') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/cadastro-funcionario/' . $cadastrofuncionario->id . '/edit') }}" title="Edit CadastroFuncionario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('cadastrofuncionario' . '/' . $cadastrofuncionario->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete CadastroFuncionario" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $cadastrofuncionario->id }}</td>
                                    </tr>
                                    <tr><th> Nome </th><td> {{ $cadastrofuncionario->nome }} </td></tr><tr><th> Email </th><td> {{ $cadastrofuncionario->email }} </td></tr><tr><th> Genero </th><td> {{ $cadastrofuncionario->genero }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
