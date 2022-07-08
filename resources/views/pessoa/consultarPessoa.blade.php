@extends('principal')
@extends('navbar')

@section('content')

    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Pessoas Cadastrados</h1>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>nomeCompleto</th>
                                        <th>cpf</th>
                                        <th>sexo</th>
                                        <th>dataDeNascimento</th>
                                        <th>endereco</th>
                                        <th>cidade</th>
                                        <th>bairro</th>
                                        <th>cep</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pessoa as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nomeCompleto }}</td>
                                        <td>{{ $item->cpf }}</td>
                                        <td>{{ $item->sexo }}</td>
                                        <td>{{ $item->dataDeNascimento }}</td>
                                        <td>{{ $item->endereco }}</td>
                                        <td>{{ $item->cidade }}</td>
                                        <td>{{ $item->bairro }}</td>
                                        <td>{{ $item->cep }}</td>
  
                                        <td>
                                            <a href="{{ url('/pessoa/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/pessoa/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
  
                                            <form method="POST" action="{{ url('/pessoa' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <a href="{{ url('/pessoa/cadastrar') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Adicionar Novo
                            
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop