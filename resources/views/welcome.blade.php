@extends('layouts.guest')
@section('section')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @forelse ($posts as $post)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5 ">
                                <a class="post-thumb mb-4 d-block" href="{{route('single-blog', ['id' => $post->id])}}">
                                    <img src="{{ asset('uploads/' . $post->thumbnail) }}" alt=""
                                        class="img-fluid w-100">
                                </a>

                                <div class="post-content-grid">
                                    <div class="label-date">
                                        <span class="day">15</span>
                                        <span class="month text-uppercase">apr</span>
                                    </div>
                                    <h3 class="post-title mt-1"><a href="{{route('single-blog', ['id' => $post->id])}}">{{$post->title}}</a></h3>
                                    <p>{{$post->excerpt}}</p>
                                </div>
                            </article>
                        </div>
                        @empty
                            <p>No posts available.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
