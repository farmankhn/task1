@extends('app')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Blog Home Two
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Home</a>
                    </li>
                    <li class="active">Blog Home Two</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        @foreach($blogs as $blog)
        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-camera fa-4x"></i>
                </p>
                <p><?php echo date('d M Y', strtotime('{{ $blog->added_on }}'));?></p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3>
                    <a href="{{ action('Main@show', [$blog->id]) }}"> {{ $blog->title }}</a>
                </h3>
                <p>by <a href="#">Start Bootstrap</a>
                </p>
                <p>
                        {!! $blog->description !!}
                </p>
                <a class="btn btn-primary" href="{{ action('Main@show', [$blog->id]) }}">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        @endforeach
        
        
        <!-- Pager -->
        <div class="row">
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
                </li>
                <li class="next"><a href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>
@stop