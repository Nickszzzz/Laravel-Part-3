@extends('layouts.app')

@section('content')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="fs-3">{{$post->title}}</h1>
                        <h6 class="fs-3">{{$post->excerpt}}</h6>
                        <p>By {{$post->user->name}} at {{date('F d, Y', strtotime($post->published_at))}}</p>
                        <p class="post-content">
                            {!! $post->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection
