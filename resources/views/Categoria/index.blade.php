@extends('TemplateAdmin.index')
@section('contents')
    <h1 class="h3 mb-4 text-gray-800">Categoria de produtos</h1>
    
    <div class="card">
        <div class="card-header">
           Categorias
        </div>
        <div class="card-body">
            <a href='/categoria/novo' class="btn btn-success mt-2 mb-2" style="margin-bottom: 10px !important;">
                Novo
            </a>
            <table class="table table-bordered dataTable mt-2">
                
                <thead>
                    <td>ID</td>
                    <td>Nome</td>                    
                    <td>Situação</td>
                </thead>            
                <tbody>

                    @foreach($categorias as $linha)
                        <tr>
                            <td>{{$linha['id']}}</td>
                            <td>{{$linha['nome']}} </td>
                            <td>{{$linha['situacao']}}</td>
                            <td>
                                <a href="/categoria/update/{{$linha['id']}}" class="btn btn-success"><li class="fa fa-edit"></li></a>
                                <a href="/categoria/excluir/{{$linha['id']}}" class="btn btn-danger"><li class="fa fa-trash"></li></a>
                            </td>                 
                        </tr>
                    @endforeach         

                </tbody>
            </table>
        </div>
    </div>
@endsection

<!-- 
    php artisan make:migration create_table_marca 
-->