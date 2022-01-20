<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @include("partials.header_scripts")

  <title> @yield('page_title') </title>
</head>

<body>
  @include("partials.the_header")

  <main>
    @yield('content')
  </main>
  
  @include("partials.the_footer")
</body>
</html>