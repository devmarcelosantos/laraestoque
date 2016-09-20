@extends('layouts.locastyle')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Listar Produtos</h1>
<div class="ls-box">
  <h5 class="ls-title-5">Procurar por produto específico:</h5>
  <form method="post" action="{{route('product.list')}}" class="ls-form ls-form-horizontal row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-4 col-xs-12">
        <b class="ls-label-text">ID:</b>
        <input type="number" name="id" placeholder="Id do produto" class="ls-field ls-no-spin" pattern="\d">
      </label>
      <label class="ls-label col-md-4 col-xs-12">
        <b class="ls-label-text">Nome:</b>
        <input type="text" name="name" maxlength="100" placeholder="Nome do produto" class="ls-field">
      </label>
    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Buscar" class="ls-btn" title="Buscar">
      <input class="ls-btn-danger" type="reset" value="Limpar">
    </div>
  </form>

  <table class="ls-table ls-table-striped ls-bg-header">
    <thead>
      <tr>
        <th>Código do Produto</th>
        <th class="hidden-xs ls-data-ascending">
          <a href="">Nome</a>
        </th>
        <th>Quantidade</th>
        <th class="hidden-xs">Preço</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
      <tr>
        <td><a href="" title="">{{ $product->id }}</a></td>
        <td class="hidden-xs">{{ $product->name }}</td>
        <td>{{ $product->amount }}</td>
        <td class="hidden-xs">R$ {{ $product->price }}</td>
        <td class="ls-regroup ">
          <div data-ls-module="dropdown" class="ls-dropdown ">
            <a href="#" class="ls-btn ls-btn-sm ">Administrar</a>
            <ul class="ls-dropdown-nav">
              <li><a href="{{route('product.editPage',$product->id)}}">Alterar</a></li>
              <li><a href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{route('product.delete', $product->id)}}' : false)" class="ls-color-danger">Excluir</a></li>
            </ul>
          </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@stop