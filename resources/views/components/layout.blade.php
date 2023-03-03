<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />

      <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/7fd90f7e36.js" crossorigin="anonymous"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        {{-- About-Us Animation --}}
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
          @vite('resources/js/app.js')
           @vite('resources/js/jquery.counterup.min.js')             

        {{-- Testimonials Carousel Effects --}}
        <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>

        
        <title>IMPERIALHOMES</title>
    </head>
    <body class="bg-cyan-600">
        <main>
            {{$slot}}
           
       
        
        <x-flash-message />

        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
        <script>
          ScrollReveal({
            reset: false,
           
            duration: 2500,

          });
          ScrollReveal().reveal(".title", {
            delay: 100,
            origin: "bottom",
            interval: 200,
            distance: "60px",
          });
          ScrollReveal().reveal(".title2", {
            delay: 300,
            origin: "left",
            distance: "60px",
          });
          ScrollReveal().reveal(".card", {
            delay: 200,
            origin: "bottom",
            interval: 200,
            distance: "60px",
          });
          ScrollReveal().reveal(".img1", {
            delay: 100,
            scale: 0.35,
            origin: "bottom",
            interval: 200,
            distance: "60px",
          });
          // ====================aboutus==============

          ScrollReveal().reveal(".card2", {
            delay: 200,
            scale: 0.45,
            interval: 200,

          });
          ScrollReveal().reveal(".content", {
            delay: 300,
            origin: "right",
            distance: "60px",
          });
          // ================footer====================
          ScrollReveal().reveal(".icon", {
            delay: 200,
            scale: 0.35,
            interval: 200,
          });
          ScrollReveal().reveal(".link, .link2, .link3", {
            delay: 300,
            origin: "left",
            distance: "60px",
          });
          
          
        </script>
         </main>
    </body>
    
</html>