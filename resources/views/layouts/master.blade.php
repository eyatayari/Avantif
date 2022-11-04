<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  

  @include('layouts.head')
</head>
 
<body>

@include('layouts.main-headbar')



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>@yield('title-page')</h1>
      <nav>
        <ol class="breadcrumb">
          @yield('breadcrumb')
          
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @yield('content')
  </main><!-- End #main -->


   @include('layouts.footer')

  

   @include('layouts.scripts')

</body>

</html>