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
        <p>We do stuff. Like product management, software engineering and consulting.</p>
        <p>We're also runners and love to ride our bikes.</p>
      </br>
      </div>

      <!-- include the common navigation content -->
      @include('navigation')
    </div>

  </div>
</body>
</html>
