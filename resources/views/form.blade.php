@extends('layouts.main')
@section('content')
   <div class="container">
        <form action="{{ route('form.store') }}" method="post" class="form" id="form">
            @csrf
            <input type="text" name="name" placeholder="name" class="form_field">
            <input type="email" name="email" placeholder="e-mail" class="form_field">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="message" class="form_field"></textarea>
            <button id='send' type="button" class="form_field">Save</button>
        </form>
       <div id="saved_data">

       </div>
   </div>
@endsection

