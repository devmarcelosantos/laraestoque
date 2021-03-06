@extends('layouts.locastyle')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Editar Produto</h1>
<div class="ls-box">
  <form method="post" action="{{route('product.edit',$product->id)}}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-3">
        <b class="ls-label-text">Nome</b>
        <input value="{{ $product->name }}" type="text" data-ls-module="charCounter" maxlength="100" name="name" placeholder="Nome do Produto" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Preço do produto</b>
        <input value="{{ $product->price }}" class="ls-no-spin" type="number" name="price" placeholder="Ex: 1000.00" required>
      </label>
    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Atualizar" class="ls-btn" title="update">
    </div>
  </form>
</div>
@stop