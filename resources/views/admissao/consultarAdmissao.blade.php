@extends('principal')
@extends('navbar')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Admissão</h1>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id </th>
                                        <th>Data De Admissão</th>
                                        <th>Grau De Dependência</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($admissao as $item)
                                    <tr>
                                        <td>{{ $item->idAdmissao }}</td>
                                        <td>{{ $item->dataAdmissao}}</td>
                                        <td>{{ $item->grauDependencia }}</td>
                                        <td>
                                            <a href="{{ url('/admissao/' . $item->idAdmissao) }}" title="View admissao"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admissao/' . $item->idAdmissao . '/edit') }}" title="Edit admissao"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
  
                                            <form method="POST" action="{{ url('/admissao' . '/' . $item->idAdmissao) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete admissao" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ url('/admissao/create') }}" class="btn btn-success btn-sm" title="Add New admissao">
                            Adicionar Novo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection