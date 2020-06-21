<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/style.css" />
  </head>
  <body>
    <!-- Application Stylesheet -->

  @csrf

@yield('style')
</head>
    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

    <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        // <script src="/assets/mail/jqBootstrapValidation.js"></script>
        // <script src="/assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>

<script type="text/javascript">
$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': window.Laravel.csrfToken,
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'

        }
    });
});
</script>

@stack('scripts')
</body>
</html>
