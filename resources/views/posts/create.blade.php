@extends('layouts.app_original')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                {{-- サニタイジング防止 --}}
                <div class="form-group">
                    <label>学習言語</label>
                    <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                </div>
                <div class="form-group">
                    <label>学習内容・時間</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">作成</button>
            </form>
        </div>
    </div>
</div>
@endsection
