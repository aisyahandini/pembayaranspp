@extends('layouts.main_user')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hallo, {{ Auth::user()->name }}</h1>
    </div>
@endsection
