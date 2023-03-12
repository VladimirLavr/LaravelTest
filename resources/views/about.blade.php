@extends('layouts.app')

@section('about')


@foreach($data as $item)

<a href="{{route('contact-data-one',$item-)}}"><button class="btn btn-warning">Детальнее</button></a>


@endforeach

@endsection