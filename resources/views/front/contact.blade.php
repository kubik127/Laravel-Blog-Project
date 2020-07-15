@extends('front.layouts.master')
@section('title','İletişim')
@section('bg','https://raw.githubusercontent.com/StartBootstrap/startbootstrap-clean-blog/master/img/contact-bg.jpg')
@section('content')
<div class="col-md-8">
  @if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
  @endif
  <p>Bizimle iletişime geçebilirsiniz.</p>
  <form method="post" action="{{route('contact.post')}}">
    @csrf
    <div class="control-group">
      <div class="form-group controls">
        <label>Ad Soyad</label>
        <input type="text" class="form-control" placeholder="Ad Soyadınız" name="name" >
        <p class="help-block text-danger"></p>
      </div>
    </div>
    <div class="control-group">
      <div class="form-group  controls">
        <label>Email Adresi</label>
        <input type="email" class="form-control" placeholder="Email Adresiniz" name="email" >
        <p class="help-block text-danger"></p>
      </div>
    </div>
    <div class="control-group">
      <div class="form-group col-xs-12 controls">
        <label>Konu</label>
        <select class="form-control" name="topic">
          <option>Bilgi</option>
          <option>Destek</option>
          <option>Genel</option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <div class="form-group controls">
        <label>Mesajınız</label>
        <textarea rows="5" class="form-control" placeholder="Mesajınız" name="message" ></textarea>
      </div>
    </div>
    <br>
    <div id="success"></div>
    <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
  </form>
</div>
<div class="col-md-4">
<br><br>
Adres: İstanbul <br>
Tel: 02120000000 <br>
Email: info@info.com <br>
</div>
@endsection
