<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
    crossorigin="anonymous"
    />
    <!-- Font Awesome -->
    <script
    src="https://kit.fontawesome.com/0d8b715e25.js"
    crossorigin="anonymous"
    ></script>
    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <!-- Include ClipboardJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
    
    <style>
      body {
        height: 100vh;
      }
    </style>
  </head>
  <body>
    @yield('body')

    <div aria-live="polite" aria-atomic="true" class="position-relative">
      <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <strong class="me-auto">Copy Success</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>
      </div>
    </div>
  
    <script>
      $(document).ready(function() {
        console.log("OK");
        // Inisialisasi ClipboardJS
        var clipboard = new ClipboardJS('.copy-link');
  
        // Ketika tombol copy di-klik, tampilkan toast
        $('.copy-link').click(function() {
          // Ambil nilai data-clipboard-text dari tombol yang diklik
          var text = $(this).data('clipboard-text');
          document.execCommand("copy");
          
          // Tampilkan toast dengan Bootstrap
          $('.toast-body').html('Link "' + text + '" telah disalin.');
          $('.toast').toast('show');
        });
      });
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    {{-- @stack('script') --}}
  </body>
</html>
