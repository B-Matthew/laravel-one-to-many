@extends('layouts.main-layout')
@section('content')
  <main>
    <div class="container">
      <h2>Ciao {{$name}}</h2>
      <ul>
        @foreach ($employees as $employee)
          <li>
            <h3>{{$employee -> firstname}} {{$employee -> lastname}}</h3>
            <p>@foreach ($employee -> task as $task )
              {{$task -> title}} , {{$task -> description}}
            @endforeach</p>
          </li>
        @endforeach
      </ul>
    </div>
  </main>
@endsection
