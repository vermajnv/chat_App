<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title></title>
      <link rel="stylesheet" href="css/app.css">
   </head>
   <body>
      <div class="" id="app">
         <chat-log :messages="messages"></chat-log>
         <chat-composer @messagesent="addMessage"></chat-composer>
      </div>
      <h1>HI THIS IS LARAVEL CHAT APP</h1>

      <script type="text/javascript" charset="utf-8" src="js/app.js">

      </script>
   </body>
</html>
