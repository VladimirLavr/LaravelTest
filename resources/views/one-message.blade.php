@extends('layouts.app')

@section('title-block')

@endsection


@section('content')


<div class="alert alert-info">
    <p> Адресс отправителя:{{$data->from}}</p>
    <p> Адресс получателя:{{$data->to}}</p>
    @if($data->copy)
    <p> Адресс копии получателя :{{$data->copy}}</p>
    @endif
    <iframe srcdoc='{{$data->body}}' frameborder="0"></iframe>
</div>

<a href="/"><button class="btn btn-warning">Вернуться к форме</button></a>

@endsection