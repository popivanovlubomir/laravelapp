@extends('admin.layouts.master')

@section('content')
    <hr>
    <div class="page-header">
        <h1>Articles</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <table class="table table-responsive">
               <thead>
                    <tr>#</tr>
                    <tr>Title</tr>
                    <tr>Body</tr>
                    <tr>published</tr>
                    <tr>Published by</tr>
               </thead>
           </table>
        </div>
        <ul>
            @foreach($articles as $article)
                <li>

                    <a href="{{ route('admin_articles_view', ['article_id' => $article->id]) }}">{{ $article->title }}</a><br />
                    Body: {{ $article->body }} <br />
                    Added by: {{ $article->user->name }} <br />
                    {{ $article->created_at->diffForHumans() }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
