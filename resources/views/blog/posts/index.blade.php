@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <table>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
