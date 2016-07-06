@extends('app')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">FAQ
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Home</a>
                    </li>
                    <li class="active">FAQ</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                @foreach($faqs as $faq) 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">{{ $faq->question }}</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
@stop