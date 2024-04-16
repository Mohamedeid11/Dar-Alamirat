@extends('dashboard.layouts.app')
@section('meta')
    <meta charset="utf-8" />
    <title>{{__('dashboard.settings.general-settings.title')}}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
@endsection

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">UI Elements</a></li>
            <li class="active">Tabs & Accordions</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Tabs & Accordions <small>header small text goes here...</small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#default-tab-1" data-toggle="tab">{{__('dashboard.general')}}</a></li>
                    {{--<li class=""><a href="#default-tab-2" data-toggle="tab">Default Tab 2</a></li>
                    <li class=""><a href="#default-tab-3" data-toggle="tab">Default Tab 3</a></li>--}}
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="default-tab-1">

                        <h3 class="m-t-10"><i class="fa fa-cog"></i> Lorem ipsum dolor sit amet</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor,
                            est diam sagittis orci, a ornare nisi quam elementum tortor. Proin interdum ante porta est convallis
                            dapibus dictum in nibh. Aenean quis massa congue metus mollis fermentum eget et tellus.
                            Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, nec eleifend orci eros id lectus.
                        </p>
                        <p class="text-right m-b-0">
                            <a href="javascript:;" class="btn btn-white m-r-5">Default</a>
                            <a href="javascript:;" class="btn btn-primary">Primary</a>
                        </p>
                    </div>

                    {{--<div class="tab-pane fade" id="default-tab-2">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <p>
                            Nullam ac sapien justo. Nam augue mauris, malesuada non magna sed, feugiat blandit ligula.
                            In tristique tincidunt purus id iaculis. Pellentesque volutpat tortor a mauris convallis,
                            sit amet scelerisque lectus adipiscing.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="default-tab-3">
                        <p>
								<span class="fa-stack fa-4x pull-left m-r-10">
									<i class="fa fa-square-o fa-stack-2x"></i>
									<i class="fa fa-twitter fa-stack-1x"></i>
								</span>
                            Praesent tincidunt nulla ut elit vestibulum viverra. Sed placerat magna eget eros accumsan elementum.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis lobortis neque.
                            Maecenas justo odio, bibendum fringilla quam nec, commodo rutrum quam.
                            Donec cursus erat in lacus congue sodales. Nunc bibendum id augue sit amet placerat.
                            Quisque et quam id felis tempus volutpat at at diam. Vivamus ac diam turpis.Sed at lacinia augue.
                            Nulla facilisi. Fusce at erat suscipit, dapibus elit quis, luctus nulla.
                            Quisque adipiscing dui nec orci fermentum blandit.
                            Sed at lacinia augue. Nulla facilisi. Fusce at erat suscipit, dapibus elit quis, luctus nulla.
                            Quisque adipiscing dui nec orci fermentum blandit.
                        </p>
                    </div>--}}
                </div>
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->
@endsection
