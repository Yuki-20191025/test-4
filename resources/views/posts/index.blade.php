@extends('layouts.app_original')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card text-center">
            <div class="card-header">
                記録一覧
            </div>
            @foreach($posts as $post)
            <div class="card-body">
                <h5 class="card-title"> 学習言語: {{ $post->title }}</h5>
                <p class="card-text">
                  学習内容・時間 : {{ $post->body }}
                </p>
                <p class="card-text">投稿者：Seed Techさん</p>
                <a href="#" class="btn btn-primary">詳細へ</a>
            </div>
            <div class="card-footer text-muted">
                投稿日時 : {{ $post->created_at }}
            </div>
            @endforeach
        </div>
        </div>
        <div class="col-md-2">
          <a href="{{ route('posts.create') }}" class="btn btn-primary">
            記録追加
          </a>
        </div>
    </div>
</div>
@endsection
