@extends('layouts.app')

@section('content')
<div class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{route('getstart')}}">
        @csrf 
          <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="">
            Favorite color
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="answer"  type="text" placeholder="Answer">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="">
            Favorite color
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="answer2"  type="text" placeholder="Answer">
        </div>
      <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Save
        </button>
      </div>
    </form>
    
  </div>

@endsection