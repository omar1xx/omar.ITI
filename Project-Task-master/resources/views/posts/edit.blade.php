@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>تعديل المنشور</h2>
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">العنوان</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
            </div>

            <div class="form-group">
                <label for="body">المحتوى</label>
                <textarea name="body" id="body" class="form-control" rows="5" required>{{ $post->body }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">حفظ التعديلات</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">إلغاء</a>
        </form>
    </div>
@endsection
