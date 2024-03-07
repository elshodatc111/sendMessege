<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('sendSms') }}" method="post">
        @csrf
        <label for="phone">Telefon taqam</label><br>
        <input type="text" name="phone" required><br>
        <label for="text">Telefon taqam</label><br>
        <textarea name="text" required></textarea><br>
        <button type="submit">Send Messege</button>
    </form>
</body>
</html>