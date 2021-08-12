@extends('layouts.ads')

@section('content')

{{-- <p>{{$data}}</p> --}}
<h2>Horokanai Event Highlight</h2>
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
{{-- {!! $datas->links('vendor.pagination.simple-bootstrap-4') !!} --}}
@endsection

@section('ads')
    @parent
    <p>Horokanai Community member get 10% off at our shop.</p>
@endsection