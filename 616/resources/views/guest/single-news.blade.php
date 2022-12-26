@extends('layouts.guest')
@section('content')
<section class="section single-wrapper" id="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area text-center">
                        @foreach ($news as $berita)
                        <h3>{{ $berita->name }}</h3>

                        <div class="blog-meta big-meta">
                            <small><a href="tech-single.html" title="">{{ $berita->created_at }}
                            </a></small>
                        </div><!-- end meta -->
                    </div><!-- end title -->

                    <div class="single-post-media d-flex justify-content-center">
                        <img src="{{ Storage::url($berita->image) }}" height="75" width="75" alt="" class="img-fluid" />
                    </div><!-- end media -->
                    

                    <div class="blog-content">  
                        <div class="pp">
                            <p>{{ $berita->description }}

                        </div><!-- end pp -->
                        @endforeach
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="upload/banner_07.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->
                    <div class="widget">
                        <h2 class="widget-title">Berita Lainnya</h2>
                        <div class="blog-list-widget">
                            @foreach ($sidebar as $other)
                            <div class="list-group">
                                <a href="{{route('show.news', $other->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="{{ Storage::url($other->image) }}" height="75" width="75" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">{{ $other->name }}</h5>
                                        <small>{{ $other->created_at }}</small>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection