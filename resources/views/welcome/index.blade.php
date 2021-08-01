@extends('layouts.appads')

@section('content')

<h1>Hacker Fair help you build Stuff Faster</h1>
<p>Learn, teach, hack and make friends with developers in your city.</p>

{{-- <p>{{$data}}</p> --}}

<p>
    {{-- <a href="{{ route('events.show',['id' => 42])}}">laravel hacking and coffe</a> --}}
</p>

<ul>
    @forelse ($datas as $key => $data)
     <li>{{ $data->name }}</li>   
    @empty
        <li>No events found!</li>
    @endforelse
</ul>

{{-- {!! $datas->links() !!} --}}
{!! $datas->links('vendor.pagination.simple-bootstrap-4') !!}
@endsection

@section('ads')
    @parent
    <p>Hacker pair member get 10% off at our shop.</p>
@endsection