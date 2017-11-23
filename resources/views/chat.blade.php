@extends('layouts.app')
@section('content')
<div class="container" id="app">
        <div class="panel" style="border-radius: 25px; padding: 1.5em;">
            <div class="panel panel-heading panel-primary" style="border-radius: 25px; padding: 1.5em;">
            <h1 class="text-center">Chatroom</h1>
        </div>
        <div class="panel panel-body"><chat-message></chat-message>
            <chat-log :messages="messages"></chat-log>
            <chat-composer v-on:messagesent="addMessage" v-bind:current-user='{!! Auth::user()->toJson() !!}'></chat-compose></div>
        </div>
    </div>
@endsection