@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-7 my-2">    
                <h4 class="h4">{{ $event->name }}</h4>
                <h5 class="h5">Attend Request</h5>
            </div>
            <div class="col col-md-2 col-ofset-3 my-2">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 blog-main col-lg-9 blog-main col-sm-9 blogmain">
                @include('partials._messages')
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Requestor</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                @php $i = ($users->currentpage()-1)* $users->perpage() + 1;@endphp
                @forelse ($users as $user)
                    <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{ $user->name }} </td>
                        <td>@if ($user->pivot->is_confirmed == '0')
                            <span class="badge badge-warning px-3 py-2">waiting confirmation</span>
                            @else
                            <span class="badge badge-success px-3 py-2">confirmed</span>
                            @endif
                        </td>
                        <td>
                            @if ($user->pivot->is_confirmed == '0')
                            {!! Html::decode(link_to_route('dashboard.approve', '<i class="fa fa-check-square-o"></i> approve', ['event' => $event->id, 'approve' => $user->pivot->id], array('class' => 'badge badge-pill badge-primary px-3 py-2')) ) !!}
                            @else
                                &nbsp;
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">data Not found</th>
                    </tr>
                @endforelse
                    </tbody>
                </table>
            </div>

            <div class="col">
                @include('partials._member')
            </div>
        </div>
        <div class="row">
            <div class="col col-md-9">
                <div class="d-flex justify-content-center">
                {{-- {!! $events->links() !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection