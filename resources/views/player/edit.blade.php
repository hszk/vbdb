@extends('layout')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12" style="padding:10px 0; padding-left:40px;">
        <h3>{{ $player->name }}<h3>
        {{ $player->note }}
      </div>
    </div>
  </div>
@endsection
