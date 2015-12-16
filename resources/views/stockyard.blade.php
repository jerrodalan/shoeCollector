@extends('app')

@section('content')
    <div class="container">
        <div class="page-header ">
            <h1 class="text-center">The Stock Yard</h1>
        </div>
        <div class="row">
            @foreach($shoes as $shoe)
            <div class="col-md-4" style="margin-bottom: 20px;">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>{{$shoe->title}}</h3>
                        </div>
                        <div class="col-sm-6">
                            <h3 style="opacity: .8; text-align:right;">{{$shoe->size}}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="img/{{$shoe->img}}" class="img-responsive img-rounded">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center" style="margin-top: 10px; margin-bottom: 10px;">${{$shoe->price}}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class ="col-md-2"></div>
                        <div class ="col-md-8 center-block">
                            <button type="button" class="btn-primary btn-block" style="margin-right: auto; margin-left:auto; padding: 10px 0;">Buy</button>
                        </div>
                        <div class ="col-md-2"></div>
                    </div>
            </div>
            @endforeach
        </div>

    </div>


@endsection