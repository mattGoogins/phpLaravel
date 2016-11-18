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
        <p>There's a ton of stuff to tell you about.</p>
        <p>We believe that the best way share is directly. We'd love to meet for coffee (and a doughnut).</p>
      </br>
    </div>

    <!-- include the common navigation -->
    @include('navigation')

  </div>
</div>
</body>
</html>
