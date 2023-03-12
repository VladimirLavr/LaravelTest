@extends('layouts.app')

@section('title-block')
Страница контактов
@endsection

@section('content')





<form action="{{route('contact-form')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="from">Введите адресс отправителя</label>
        <input type="text" class="form-control
        " name='from' placeholder="Введите адресс отправителя" id="from">
    </div>

    <div class="form-group">
        <label for="to">Введите адресс получателя</label>
        <input type="text" class="form-control
        " name='to' placeholder="Введите адресс получателя" id="to">
    </div>
    <div class="form-group">
        <label for="copy">Введите адресс получателя(копия)</label>
        <input type="text" class="form-control
        " name='copy' placeholder="Введите адресс получателя(копия)" id="copy">
    </div>
    <div class="form-group">
        <label for="subject">Тема сообщения</label>
        <input type="text" class="form-control
        " name='subject' placeholder="Тема сообщения" id="subject">
    </div>

    <div class="form-group">
        <label for="type">Тип тела письма</label>
        <input type="text" class="form-control
        " name='type' placeholder="Тип тела письма" id="type">
    </div>
    <div class="form-group">
        <label for="body">Сообщения</label>
        <textarea type="text" class="form-control
        " name='body' placeholder="Введите сообщение" id="body"></textarea>
    </div>




    <button class="btn btn-success   mt-3" type="submit">Отправить</button>

</form>

@endsection

@section('hero')
@endsection