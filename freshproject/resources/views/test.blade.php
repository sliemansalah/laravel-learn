<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>

<body>
<h1>Test complete!</h1>
<h2>Name = <?=$name;?> </h2>
<h3><?=htmlspecialchars($name, ENT_QUOTES);?> </h3> <!-- to write script -->
<h4>{{$name}}</h4> <!-- two above work -->
<h5>{!! $name !!}</h5> <!-- two above work -->

</body>
</html>
