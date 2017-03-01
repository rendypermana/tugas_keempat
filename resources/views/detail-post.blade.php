@extends('layout.home')

@section('body')
<section id="blog-details" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-7">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="single-blog blog-details two-column">
                            <div class="post- overflow">
                                <h1 class="post-title bold"><a>{!! $article->title !!}</a></h1>
                                <h3 class="post-author"><a><span class="fa fa-calendar-o "></span> Posted on {!! $article->posted !!}</a></h3>
                                <p>{!! $article->content !!}</p>
                                <div class="padding-top">
                                    <hr>
                                </div>
                                <!--Input Komentar-->
                                <div class="response-area jarak-komen">
                                <h2 class="bold">Give Comments</h2>
                                    <div class="contact-form bottom">
                                        <form role="form" action="/comment" method="post">
                                        <div class="form-group">
                                        <textarea name="comment" id="comment" required="required" class="form-control" rows="8" placeholder="Your comments here" value=""></textarea>
                                        <input type="hidden" name="id_article" value="{!! $article->id_article !!}">
                                        </div> 
                                    </div>
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-warning" value="Submit">
                                        </form>
                                    </div>
                                </div>
                                <!--komentar-->
                                <div class="response-area">
                                <h2 class="bold">Comments</h2>
                                <ul class="media-list">
                                   @foreach ($article->comment as $item)
                                    <li class="media">
                                        <div class="media-body">
                                                <span><i class="fa fa-user"></i> Posted by <a>Anonymous</a></span>
                                                <p>{{$item->comment}}</p>
                                        </div>
                                    <li>
                                    @endforeach
                                </ul>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('sidebar')
        </div>
    </div>
</section>

@endsection