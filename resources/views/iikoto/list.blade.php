@extends('layouts.app')

@section('content')
    <div class="container">
      @csrf
        <h1>いいことリスト</h1>
      <div class="container">
        <div>
          @foreach($iikotos as $iikoto)
          <h3>{{$iikoto->date}}</h3>
          <h1>{{$iikoto->iikoto}}</h1>
          @endforeach
        </div>
      </div>
    </div>
    
@endsection