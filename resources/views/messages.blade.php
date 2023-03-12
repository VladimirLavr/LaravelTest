@extends('layouts.app')

@section('title-block')
Все сообщения
@endsection


@section('content')


<div class="alert alert-success">
    Сообщение было доставлено

</div>


<a href="{{route('contact-data-one',$uuid )}}"><button class="btn btn-warning">Детальнее</button></a>
@endsection