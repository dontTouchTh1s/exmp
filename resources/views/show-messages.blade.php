<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container mt-5 col-sm-12 col-lg-6 col-md-8">
    <!-- Success message -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">نام</th>
            <th scope="col">ایمیل</th>
            <th scope="col">شماره</th>
            <th scope="col">موضوع</th>
            <th scope="col">متن پیام</th>

        </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
            <tr>
                <th scope="row">1</th>
                <td>{{$message['name']}}</td>
                <td>{{$message['email']}}</td>
                <td>{{$message['phone']}}</td>
                <td>{{$message['subject']}}</td>
                <td>{{$message['message']}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
</body>
</html>
