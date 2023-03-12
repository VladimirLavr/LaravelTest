@extends('layouts.app')

@section('title-block')
Обновление записей
@endsection

@section('content')



<h1>Обновление записей</h1>

<form action="{{route('contact-update-submit',$data->id)}}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Введите имя</label>
        <input type="text" class="form-control
        " name='name' value="{{$data->name}}" placeholder="Введите имя" id="name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control
        " name='email' value="{{$data->email}}" placeholder="Введите email" id="email">
    </div>
    <div class="form-group">
        <label for="subject">Тема сообщения</label>
        <input type="text" class="form-control
        " name='subject' value="{{$data->subject}}" placeholder="Тема сообщения" id="subject">
    </div>

    <div class="form-group">
        <label for="message">Сообщения</label>
        <textarea type="text" class="form-control
        " name='message' placeholder="Введите сообщение" id="message">{{$data->message}}</textarea>
    </div>

    <button class="btn btn-success   mt-3" type="submit">Обновить</button>

</form>

@endsection

@section('hero')
@endsection