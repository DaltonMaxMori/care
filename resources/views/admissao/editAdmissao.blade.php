@extends('principal')
@extends('navbar')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Editar Admissão</div>
  <div class="card-body">
       
      <form action="{{ url('admissao/' .$admissao->idAdmissao) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="idAdmissao" id="idAdmissao" value="{{$admissao->idAdmissao}}" id="idAdmissao" />
        <label>Data</label></br>
        <input type="date" name="dataAdmissao" id="dataAdmissao" value="{{$admissao->dataAdmissao}}" class="form-control"></br>
        <label for="exampleFormControlSelect1">Grau De Dependencia</label>
         <select class="form-control" type="integer" name="grauDependencia" id="grauDependencia">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select></br>
        <input type="submit" value="Editar" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
</div>
@stop