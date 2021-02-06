<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VolleyBall Database</title>
  @yield('styles')
  <!--<link rel="stylesheet" href="/css/styles.css">-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="padding-top: 55px;">
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="/player">VolleyBall Database</a>
    <button type="button" style="padding:0 5px;" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションバー">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="Navber">
      <form action="{{url('/player')}}" method="get" class="form-inline">
        @csrf
        <div class="form-group" style="padding:0 5px;">
          <input type="text" name="player" class="form-control" id="exampleFormControlInput1" placeholder="選手名" value="@if( isset($request->player) ){{ $request->player }}@endif">
        </div>
        <div class="form-group" style="padding:0 5px;">
          <select class="form-control" id="exampleFormControlSelect1" name="country">
          <option value="">全ての国</option>
          @foreach($countries as $country)
            <option value="{{ $country->id }}" @if( $request->country == $country->id ) selected @endif>{{ $country->name }}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group" style="padding:0 5px;">
          <select class="form-control" id="exampleFormControlSelect1" name="sex">
            <option value="">全て</option>
            <option value="male" @if( $request->sex == 'male' ) selected @endif>男性</option>
            <option value="female" @if( $request->sex == 'female' ) selected @endif>女性</option>
          </select>
        </div>
        <div class="form-group" style="padding:0 5px;">
          <select class="form-control" id="exampleFormControlSelect1" name="pager">
            <option value="10" @if( $request->pager == 10 ) selected @endif>10</option>
            <option value="30" @if( $request->pager == 30 ) selected @endif>30</option>
            <option value="50" @if( $request->pager == 50 ) selected @endif>50</option>
          </select>
        </div>
        <div class="form-group" style="padding:0 5px;">
          <input type="submit" value="検索" class="btn btn-primary">
        </div>
      </form>
    </div>
  </nav>
</header>
<main>
  @yield('content')
</main>
@yield('scripts')
</body>
</html>
