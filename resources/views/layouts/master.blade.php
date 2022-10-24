<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  

  @include('layouts.head')
</head>

<body>

@include('layouts.main-headbar')

@include('layouts.main-sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>@yield('title-page')</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashobard</a></li>
          <li class="breadcrumb-item">@yield('prev-page')</li>
          <li class="breadcrumb-item active">@yield('active-page')</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @yield('content')
  </main><!-- End #main -->


   @include('layouts.footer')

  

   @include('layouts.scripts')

</body>

</html>