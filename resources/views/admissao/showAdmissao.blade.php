@extends('principal')
@extends('navbar')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Admissão</div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-text">Data de Admissão : {{ $admissao->dataAdmissao }}</p>
        <p class="card-text">Grau de Dependencia : {{ $admissao->grauDependencia }}</p>
  </div>
    </hr>
  </div>
</div>
@endsection