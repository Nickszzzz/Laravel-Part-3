@extends('layouts.guest')
@section('section')

    <section class="single-block-wrapper section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="single-post">
                        <div class="post-header mb-5 text-center">
                            <h2 class="post-title mt-2">
                                {{$post->title}}
                            </h2>

                            <div class="post-meta">
                                <span class="text-uppercase font-sm letter-spacing-1 mr-3">by {{$post->user->name}}</span>
                                <span class="text-uppercase font-sm letter-spacing-1">{{date('F d, Y', strtotime($post->published_at))}}</span>
                            </div>
                            <div class="post-featured-image mt-5">
                                <img src="{{ asset('uploads/' . $post->thumbnail) }}" class="img-fluid w-100" alt="featured-image">
                            </div>
                        </div>
                        <div class="post-body">
                            <div class="entry-content">
                                {!! $post->content !!}
                            </div>
                            
                        </div>
                    </div>

                    <form class="comment-form mb-5 gray-bg p-5 mt-5" id="comment-form">
                        <h3 class="mb-4 text-center">Leave a comment</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
                                    placeholder="Comment"></textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" id="name"
                                        placeholder="Name:">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="mail" id="mail"
                                        placeholder="Email:">
                                </div>
                            </div>
                        </div>

                        <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact"
                            value="Submit Message">
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
