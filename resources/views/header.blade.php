<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('report', ['locale' => app()->getLocale()]) }}">Report</a></li>

      <li><a href="{{ route('contact', ['locale' => app()->getLocale(), 'next'=>'set currency']) }}">Contact</a></li>
      <li><a href="{{ route('set-currency', ['locale' => app()->getLocale()]) }}">Set Currency</a></li>


    </ul>
  </div>
</nav>