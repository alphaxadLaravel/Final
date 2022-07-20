<!doctype html>
<html
lang="en"
class="light-style layout-menu-fixed"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/favicon.ico') }}" />

    {{-- title --}}
    <title>@yield('title')</title>

    {{-- fonts  --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @livewireStyles

    {{-- Styles  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('vendor/css/core.css')}}"  />
    <link rel="stylesheet" href="{{asset('vendor/css/theme-default.css')}}"  />
    <link rel="stylesheet" href="{{asset('css/demo.css')}}" />
    <style>
      body {
          font-family: 'Nunito', sans-serif;
          background-color: #f8fafc;
      }
  </style>
    <script src="{{asset('vendor/js/helpers.js')}}"></script>
</head>
<body>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

          {{-- Side bar here --}}
          @include('components.sidebar')

          <!-- Layout container -->
          <div class="layout-page">
            
            {{-- The top navbar here --}}
            @include('components.navbar')
  
            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->
  
              <div class="container-xxl flex-grow-1 container-p-y">
                  @yield('system')
              </div>
  
              <!-- Footer -->
                @include('components.footer')
              <!-- / Footer -->
  
              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>
  
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    @livewireScripts
    {{-- script  --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{asset('vendor/js/menu.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
    
</body>
</html>
