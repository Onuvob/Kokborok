@section('title', 'Kokborok Language | '. $word->word )

@extends('layouts.app')

@section('content')
    <div class="container">

        @include('layouts.word-layouts.word-details')

    </div>
@endsection
