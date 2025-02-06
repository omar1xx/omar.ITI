@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>إضافة منشور جديد</h2>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>العنوان</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>المحتوى</label>
                <textarea name="body" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-2">حفظ</button>
        </form>
    </div>
@endsection
