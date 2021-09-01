@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   

                    
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-md-9 blog-main col-lg-9 blog-main col-sm-9 blogmain">
            {{
                link_to_route('event.partisipate', 'partisipate', ['id'=>'32'], ['class'=>'btn btn-link'])
            }}
        </div>
        <div class="col">
            right
        </div>
    </div>    
</div>
@endsection
