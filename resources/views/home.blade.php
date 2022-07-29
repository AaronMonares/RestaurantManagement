@extends ('layouts.main')

@section('title', 'Homepage')

{{-- @section('sidebar')
    @parent
    <li>
        <a href="">This link is from homepage.</a>
    </li>
@endsection

@section('footer')
    @parent
    <li>
        <a href="">This link is from homepage.</a>
    </li>
@endsection --}}

@section('content')
    <h1>This is Homepage.</h1>

    <p>First Name : {{$first_name}}</p>
    <p>Last Name : {{$last_name}}</p>
@endsection