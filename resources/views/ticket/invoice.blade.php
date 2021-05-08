<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <img src="{{ asset( 'storage/' . last(explode('public', $payment->payment_path)) ) }}" width="200">
  <a href="{{ url('member/dashboard') }}">Dashboard</a>
</body>
</html>