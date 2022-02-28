@extends('layouts.nav')

@section('nav')
   <div class="w-4/12 mt-5 p-10">
        <h2>Counsellor List</h2>
        @if (auth()->user()->isAdmin)
        <button class="p-2 text-sm w-20 rounded-lg bg-blue-400 text-white mb-2"><a href="{{route('createcounsellor')}}">Add</a></button>
        @endif
        <table class="border-collapse border w-full border-slate-500 text-center mb-2">
            <thead>
              <tr>
                <th class="border border-slate-600">Name</th>
                <th class="border border-slate-600">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($counsellors as $cs)
              <tr>
                  <td class="border border-slate-700">{{$cs->counsellor_name}}</td>
                  <td class="border border-slate-700"><button class="bg-slate-500 text-white p-1 text-sm rounded-lg"><a href="{{route('counsellor_details', ['id' => $cs->id])}}">Details</a> </button>
                    @if (auth()->user()->isAdmin)
                    <button class="bg-slate-500 text-white p-1 text-sm rounded-lg"><a href="{{route('editcounsellor', ['id' => $cs->id])}}">edit</a> </button>
                    <form action="{{route('deletecounsellor',['id' => $cs->id])}}" method="post" class="p-5">
                      @csrf
                       <button class="p-2 text-sm bg-slate-500 text-white rounded-lg" >
                           Delete
                       </button>
                   </form>
                    @endif
                  </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          {{ $counsellors->links() }}
@endsection