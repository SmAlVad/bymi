@extends('layouts.app')

@section('content')
@php /** @var \App\Models\BlogCategory $item */@endphp
<form action="{{ route('blog.admin.categories.update', $item->id) }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="container">
        @include('blog.admin.partials.errors')
        @include('blog.admin.partials.success')

        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('blog.admin.categories.includes.item_edit_main_col')
            </div>
            <div class="col-md-3">
                @include('blog.admin.categories.includes.item_edit_add_col')
            </div>
        </div>
    </div>
</form>
@endsection