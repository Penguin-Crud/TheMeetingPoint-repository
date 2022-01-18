<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Hello <b>{{$user->name}}</b>!
     you are subscribed to the event 
     <b>{{$event->title}}</b>. Date <b>{{$event->date}}</b> and hour <b>{{$event->time}}</b>
</body>
</html>