<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jobs</h1>
    @foreach ($jobs as $job)

    <h1>{{ $job['title'] }}</h1>
        <p>{{ $job['description'] }}</p>
    
    @endforeach
</body>
</html>