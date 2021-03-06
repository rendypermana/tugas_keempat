@extends('layout.home')

@section('body')

<section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                    @foreach($article as $item)
                         <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <!--Gambar-->
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="/article/{{$item->id_article}}">{{$item->title}}</a></h2>
                                    <h3 class="post-author"><a><span class="fa fa-calendar-o "></span> Posted on {{$item->posted}}</a></h3>
                                 
                                    <p>{{Str::words($item->content,30)}} <a href="/article/{{$item->id_article}}">[Read More]</a></p>
                                    <hr>
 
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <div class="blog-pagination">
                        {{ $article->links() }}
                    </div>
                 </div>
                <!--sidebar-->
              @include('sidebar')
                <!--Sidebar-->
            </div>
        </div>
    </section>
    <!--/#blog-->
@endsection