@extends('layouts.layout')
@section('content')
    <form method="post" action="{{url('addblog')}}">
        {{csrf_field()}}
        博客名：<input type="text" name="name">
        描述：<input type="text" name="des">
        <button type="submit">提交</button>
        {{--{{$post->created_at->toFormattedDateString()}}--}}
    </form>
    @endsection