@extends('layouts.nav')

@section('nav')
<div class="w-full max-w-xs mt-5 justify-center">
  <h2>Edit Counsellor</h2>
    <form enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{route('updatecounsellor', ['id' => $counsellor->id])}}">
      @csrf
      @method('PUT')
      {{-- <div class="mb-4">
        <input name="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="file" placeholder="Name">
      </div> --}}
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Counsellor Name
        </label>
        <input value="{{ old('name', $counsellor->counsellor_name) }}" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Name">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Details
        </label>
        <input value="{{ old('name', $counsellor->counsellor_details) }}" name="details" class="shadow appearance-none border w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="Counsellor's Details">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Email
        </label>
        <input value="{{ old('name', $counsellor->email) }}" name="email" class="shadow appearance-none border w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="Email">
      </div>
      {{-- <div class="mb-6">
        <label  class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Password
        </label>
        <input name="password" class="shadow appearance-none border w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
      </div> --}}

      <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Save Counsellor
        </button>
      </div>
    </form>
  </div>
@endsection