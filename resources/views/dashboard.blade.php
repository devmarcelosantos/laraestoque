@extends('layouts.locastyle')

@section('content')
<div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3">Dados do Sistema</h2>
  </header>
  <div id="sending-stats" class="row">
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Quantidade de Produtos Cadastrados</h6>
        </div>
        <div class="ls-box-body">
          <strong>1</strong>
          <small>no total</small>
        </div>
        <div class="ls-box-footer">
          <a href="#" aria-label="Mudar o Plano de Revenda" class="ls-btn ls-btn-sm" title="Mudar o Plano de Revenda">Mudar de plano</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">DADOS</h6>
        </div>
        <div class="ls-box-body">
          <strong class="ls-ico-bars"></strong>
          <small>Aqui você verifica seus dados</small>
        </div>
        <div class="ls-box-footer">
          <a href="#" aria-label="Comprar mais envios" class="ls-btn ls-btn-sm" title="Ver mais">Ver mais</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box ls-box-centered">
        <strong>TEXTO</strong>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">DATA</h6>
        </div>
        <div class="ls-box-body">
          <div class="col-xs-6">
            <strong>26</strong>
            <small>dia</small>
          </div>
          <div class="col-xs-6">
            <strong>10</strong>
            <small>mês</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop