{{ link_to('logout') }}

<pre>{{ Auth::user()->toJSON(JSON_PRETTY_PRINT) }}</pre>
