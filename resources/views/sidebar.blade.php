<!--sidebar-->
                <div class="col-md-3 col-sm-5">
                    

                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <h3>New Comments</h3>
                            @foreach($comment as $item)
                            <div class="media">
                                <div class="media-body">
                                    <h4><a href="/article/{{$item->id_article}}">{{($item->comment)}}</a></h4>
                                    <p>posted by Anonymous</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                <!--Sidebar-->
@section('script')

@endsection