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
        <p>We'd love to hear from you.</p>
        <p><a href="mailto:matt.googins@gmail.com?subject=Windward%20Software%20and%20Consulting" class="contactlink">Send us an eMail</a>, or give us a call at <a href="tel:1-612-209-6199"  class="contactlink">(612) 209-6199</a>.</p>
      </br>
      </div>

      <!-- include the common navigation content -->
      @include('navigation')
    </div>

  </div>
</body>
</html>
