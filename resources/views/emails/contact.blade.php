<!DOCTYPE html>

<html>

<head>

    <title>Info | Canyoning Baturraden</title>

</head>

<body>

    <h1>{{ $mailData['title'] }}</h1>
    <p>Name : {{ $mailData['name'] }}</p>
    <p>Email : {{ $mailData['email'] }}</p>
    <p>Phone : {{ $mailData['phone'] }}</p>
    <h2>{{ $mailData['subject'] }}</h2>
    <p>{{ $mailData['message'] }}</p>
    <p>Thank you</p>

</body>

</html>
