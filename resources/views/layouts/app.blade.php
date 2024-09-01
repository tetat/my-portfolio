<html>
  {{-- head section --}}
  @include('layouts.head')

  <body class="bg-gray-600">
    <section class="bg-gray-900 lg:w-5/6 lg:mx-auto">
      {{-- navigation bar --}}
      <header>
          @include('layouts.navbar')
      </header>
  
      <main>
          @yield('content')
      </main>
      
      {{-- footer --}}
      <footer>
        @include('layouts.footer')
      </footer>
    </section>

  </body>
</html>
