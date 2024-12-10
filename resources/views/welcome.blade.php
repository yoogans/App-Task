 <!doctype html>
 <html lang="en">

     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Testing App</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
             integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     </head>

     
     
     <body>
         @if (Route::has('login'))
             <nav class="navbar navbar-expand-lg bg-body-tertiary">
                 <div class="container-fluid">
                     <a class="navbar-brand" href="">TestApp</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                         aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarNav">
                         <ul class="navbar-nav">
                             <li class="nav-item">
                                 @auth
                                     <a href="{{ url('/home') }}"
                                         class=" nav-link rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                         Dashboard
                                     </a>
                                 @else
                                     <a href="{{ route('login') }}"
                                         class="nav-link rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                         Log in
                                     </a>
                                 @endauth
                             </li>
                         </ul>
                     </div>
                 </div>
             </nav>
         @endif
        <h1 class="text-center"> Welcome :D</h1>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
             integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
         </script>
     </body>

 </html>
