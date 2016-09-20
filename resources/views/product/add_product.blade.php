@extends('layouts.locastyle')

@section('content')
<h1 class="ls-title-intro ls-ico-plus">Adicionar Produto</h1>
<div class="ls-box">
  <form method="post" action="/products/add" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-3">
        <b class="ls-label-text">Nome</b>
        <input type="text" data-ls-module="charCounter" maxlength="100" name="name" placeholder="Nome do Produto" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Quantidade em estoque</b>
        <input class="ls-no-spin" type="number" name="amount" placeholder="Quantidade do produto em estoque" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Preço do produto</b>
        <input class="ls-no-spin" type="number" name="price" placeholder="Ex: 1000.00" required>
      </label>
    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Inserir" class="ls-btn" title="Inserir">
      <input class="ls-btn-danger" type="reset" value="Limpar">
    </div>
  </form>
</div>
@stop