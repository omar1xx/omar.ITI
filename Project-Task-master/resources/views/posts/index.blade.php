@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>منشوراتي</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">إضافة منشور</a>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>العنوان</th>
                    <th>المحتوى</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $index => $post)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ Str::limit($post->body, 100) }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-info btn-sm">عرض</a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">تعديل</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $posts->links() }}
    </div>
@endsection
