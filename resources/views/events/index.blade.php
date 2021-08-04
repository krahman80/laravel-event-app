@extends('layouts.app')

@section('content')

<h2>Event Index</h2>
{{-- <p>{{ $article }}</p> --}}
<ul>
    @forelse ($datas as $item)
     <li>{{ $item }}</li>   
    @empty
        <li>No events found!</li>
    @endforelse
</ul>
{{-- {!! $events->links() !!} --}}
{{-- {!! $events->links('vendor.pagination.simple-bootstrap-4') !!} --}}
@endsection