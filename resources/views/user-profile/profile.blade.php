@section('title', 'Kokborok Language | ' . Auth::user()->name )

@extends('layouts.app')

@section('content')
<div class="container">

    @include('layouts.user-layout.profile')

</div>
@endsection


