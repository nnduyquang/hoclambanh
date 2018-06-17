@extends('frontend.master')
@section('title')
    DẠY HỌC LÀM BÁNH CHÚ QUÂN
@stop
@section('description')
    DẠY HỌC LÀM BÁNH CHÚ QUÂN
@stop
@section('styles')

@stop
@section('bodycontent')

    @include('frontend.home.h_slider')
    @include('frontend.home.h_product')
    @include('frontend.home.fe_h_about_chief')
    @include('frontend.home.fe_h_divhcuchinh')
    @include('frontend.home.h_slogun')
    @include('frontend.home.fe_h_khoahockhuyenmai')
    @include('frontend.home.fe_h_gift')
    {{--@include('frontend.home.fe_h_staff')--}}
    @include('frontend.home.fe_home_map')


@stop

