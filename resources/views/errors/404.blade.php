<!DOCTYPE html>
<html lang="en">

<!-- include header -->
@include('head')

<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
      <a href="{{ url('/login') }}">Login</a>
      <a href="{{ url('/register') }}">Register</a>
    </div>
    @endif

    <div class="content">
      <!-- include the common title content -->
      @include('title')

      <div>
        <p>404</p>
        <p>Oops! We can't find the page you requested.</p>
        </br>
      </div>

    <!-- include the common navigation -->
    @include('navigation')

  </div>
</div>
</body>
</html>
