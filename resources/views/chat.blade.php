@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="" id="app">
         <chat-log :messages="messages"></chat-log>
         <chat-composer @messagesent="addMessage"></chat-composer>
      </div>
      <h1>HI THIS IS LARAVEL CHAT APP</h1>
      <h2>This is made on socket.io</h2>
      
   </div>
@endsection
