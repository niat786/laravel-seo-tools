@extends('seo::layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h4>
                {{$record->path}}
            </h4>
        </div>
        <div class="col-sm-4 text-right">
            <div class="btn-group btn-group-sm">
                <a class="btn btn-default btn-sm" href="{{route('pages.create')}}"><span
                            class="glyphicon glyphicon-plus"></span>&nbsp;</a>
                <a class="btn btn-default btn-sm" href="{{route('pages.index')}}"><span
                            class="glyphicon glyphicon-list"></span>&nbsp;</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            @include('seo::cards.page')
        </div>
    </div>
@endSection