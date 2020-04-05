<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <title>Form</title>
</head>
<body class="bg-secondary">
    <div class="container">
        <form action="/reg" method="POST">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <input type="text" name="user" class="form-control">
            <input type="text" name="password" class="form-control">
            <input type="submit" value="submit" class="form-control btn btn-success">
        </form>
    </div>
</body>
</html>