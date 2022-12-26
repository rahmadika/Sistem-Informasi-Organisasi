@extends('layouts.guest')
@section('content')
<section id="hero" class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-top clearfix">
                        <h4 class="pull-left">Berita Seputar Ream A Leizen <a href="#"><i class="fa fa-rss"></i></a></h4>
                    </div><!-- end blog-top -->

                    
                    <hr class="invis">
                    <div class="blog-list clearfix">
                        <div class="blog-box row">
                            <div class="col-md-4">
                                @foreach ($news as $berita)
                                <div class="post-media">
                                    <p>
                                    <a href="#" title="">
                                        <img src="{{ Storage::url($berita->image) }}" height="75" width="75" alt="" />
                                        <div class="hovereffect"></div>
                                    </a>
                                    <p>
                                </div><!-- end media -->
                                @endforeach
                            </div><!-- end col --> 

                            <div class="blog-meta big-meta col-md-8">
                                @foreach ($news as $berita )
                                <h4><a href="{{route('show.news', $berita->id) }}" title="">{{ $berita->name }}</a></h4>
                                <p>{{ Str::limit($berita->description,50) }}</p>
                                <small class="firstsmall"><a class="bg-orange" href="#" title="">Dibuat Pada</a></small>
                                <small><a href="#" title="">{{ $berita->created_at }}</a></small>
                                @endforeach
                            </div><!-- end meta -->
                            <hr class="invis">
                        </div><!-- end blog-box -->
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $news->links() !!}
                    </div>
                    
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection