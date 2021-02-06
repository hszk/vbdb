@extends('layout')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
          <table class="table">
            <thead>
            <tr>
              <th>名前</th>
              <th>性別</th>
              <th>国籍</th>
            </tr>
            </thead>
            <tbody>
              @foreach($players as $player)
                <tr>
                  <td><a href="/player/{{ $player->id }}">{{ $player->player_name }}</a></td>
                  <td>{{ $player->sex }}</td>
                  <td>{{ $player->country_name }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        {{ $players->appends(Request::query())->links() }}
      </div>
    </div>
  </div>
@endsection
