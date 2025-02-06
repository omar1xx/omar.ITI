@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>عرض المنشور</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->body }}</p>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">رجوع</a>
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">تعديل</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger">حذف</button>
                </form>
            </div>
        </div>
    </div>
@endsection
