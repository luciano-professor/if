{{-- Extender o layout principal --}}
@extends('admin.layouts.principal')

{{-- Section para o titulo --}}
@section('titulo','Cursos')

{{-- Section para a acao --}}
@section('acao', 'Listar')

{{-- Section Principal --}}
@section('conteudo-principal') {{-- Tem que colocar o nome do yeild onde quero jogar o conteudo  --}}
<a href="#" class="btn btn-primary mt-n4 mb-2 float-right">
    Adicionar
</a>

<table class="table table-hover">
    <tr>
        <td>Sistemas de Informação</td>
        <td class="d-flex justify-content-end">

            <span class="btn btn-info btn-sm" title="Editar">
                <i class="fas fa-edit fa-fw"></i>
            </span>

            <button class="btn btn-danger btn-sm ml-1" title="Excluir">
                <i class="far fa-trash-alt fa-fw"> </i>
            </button>

        </td>
    </tr>
</table>
@endsection


