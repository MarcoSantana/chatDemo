<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="css/app.css"> 


    </head>
    <body>
    <div class="container" id="app">
    <div class="panel" style="border-radius: 25px; padding: 1.5em;">
        <div class="panel panel-heading panel-primary" style="border-radius: 25px; padding: 1.5em;">
            <h1 class="text-center">Chatroom</h1>
        </div>
        <div class="panel panel-body"><chat-message></chat-message>
            <chat-log :messages="messages"></chat-log>
            <chat-composer v-on:messagesent="addMessage"></chat-compose></div>
        </div>
    </div>

       <script src="js/app.js"></script>
    </body>
</html>
