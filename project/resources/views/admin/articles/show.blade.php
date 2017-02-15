@extends('admin.layouts.master')

@section('content')
    <hr>
    <div class="page-header">
        <h1>{{ $article->title }}</h1>
    </div>
    <div class="row">
        <p>{{ $article->body }}</p>
    </div>
@endsection
