@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

{{-- @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif --}}

{{-- @if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif --}}

@if(!empty($success))
    <div class="alert alert-warning"> {{ $success }}</div>
@endif

@if(!empty($error))
    <div class="alert alert-warning"> {{ $error }}</div>
@endif