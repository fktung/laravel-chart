<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
  @stack("script")
</head>
<body>
  <div class="mx-auto w-full max-w-7xl p-4 ">
    {{$slot}}
  </div>
</body>
</html>
