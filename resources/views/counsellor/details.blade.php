@extends('layouts.nav')

@section('nav')
   <div class="w-4/12 mt-5 flex flex-col p-10 items-center">
        <div>
            <img class="w-24 h-24 rounded-full" src="{{ $counsellor->image }}"  alt="">
            <h1 class="font-bold p-5">{{$counsellor->counsellor_name}}</h1>
            <p>{{$counsellor->counsellor_details}}</p>
            <p>{{$counsellor->email}}</p>
        </div>
        <form action="{{route('bookappointment',['cs_id' => $counsellor->id])}}" method="post" class="p-5">
           @csrf
           <div class="mb-2">
            <label for="from" class="font-bold">Time</label>
            <input type="datetime-local" name="time">
            @error('time')
                <p class="text-red-400">{{$message}}</p>
            @enderror
           </div>
            <button class="p-2 text-sm bg-slate-500 text-white rounded-lg" >
                Book Appointment
            </button>
        </form>
   </div>
@endsection