@section('tail')

{{-- ===== Javascript ===== --}}

  {{-- Scripts concatenated and minified --}}
  @section('footer_scripts')

    {{-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline --}}
    @if ( Modelo::get('jquery_on') )
      {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/'.Modelo::get('jquery_version').'/jquery.min.js') }}
      <script>window.jQuery || document.write('<script src="\/{{ Modelo::get('jquery_fallback') }}"><\/script>')</script>
    @endif


    @foreach ( Modelo::get('scripts') as $script )
      {{ HTML::script($script) }}
    @endforeach


    @yield('page_scripts')
    {{-- Page-specific javascripts --}}

  @yield_section
  {{-- End scripts --}}


  {{-- Asynchronous Google Analytics --}}
  @if ( Modelo::get('analytics_on') )
    <script>
      var _gaq=[['_setAccount','{{ Modelo::get("analytics_id") }}'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  @endif

@yield_section