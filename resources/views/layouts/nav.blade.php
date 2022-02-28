@extends('layouts.app')

@section('content')
<nav class="flex items-center justify-between flex-wrap bg-gray-100 p-4">
    <ul class="flex">
        <li class="p-2"><a href="{{route('home')}}">Counsellors</a></li>
        <li class="p-2"><a href="">{{auth()->user()->name}}</a></li>
        <li class="p-2"><a href="{{route('appointment')}}">Check appointment</a></li>
        <li class="p-2"><form action="{{route('logout')}}" method="post">@csrf<button>Logout</button></form></li>
    </ul>
    </div>
  </nav>
@yield('nav')

@endsection