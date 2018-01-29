<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome!</title>
</head>
<body>
    <ul>
      <!-- Laravel's blade breaks down this code into the code seen
      below (vanilla php) -->
      
      @foreach ($tasks as $task)
        <li>{{ $task->body }}</li>  
      @endforeach
      
      <!--
      <//?php foreach ($tasks as $task) : ?>
        <li><//?= $task; ?></li>
      <//?php endforeach; ?>
      -->
    </ul>
</body>
</html>