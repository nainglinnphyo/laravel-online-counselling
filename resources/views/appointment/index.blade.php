@extends('layouts.nav')

@section('nav')
<div class="w-4/12 mt-5 flex-col">
    <h2>Appointment list</h2>
    <table class="table-auto text-center w-full">
        <thead>
          <tr>
            <th class="border border-slate-700">Name</th>
            <th class="border border-slate-700">Time</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($counsellors as $cs)
          <tr>
              <td class="border border-slate-700">{{$cs->counsellor_name}}</td>
              <td class="border border-slate-700">{{$cs->pivot->time}}</td>
          </tr>
          @endforeach

        </tbody>
      </table>
</div>
@endsection