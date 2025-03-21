<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Homesmart</title>
</head>
<body class="max-w-[2000px] 
    mx-auto 
    text-neutral-900 
    dark:text-neutral-200
    bg-white
    dark:bg-neutral-800
    ">

<nav class="mx-auto p-4 bg-amber-400">
    <div class="container
    mx-auto
    flex
    items-center
    justify-between
    ">
        <a href="/" class="focus:outline-none
        focus-visible:ring-4
        ring-neutral-900
        rounded-sm
        ring-offset-4
        ring-offset-amber-400
        lg:absolute
        lg:left-1/2
        lg:-translate-x-1/2
        lg:top-9
        z-50
        hover:opacity-75
        transition-opacity
        " aria-label="Go to Homepage">
            <img src="/asset/logo.svg" width="200" class="w-48 md:w-64 lg:w-72" alt="">
        </a>
        <button id="menu" class="
        lg:hidden
        focus-visible:ring-4
        ring-neutral-900
        rounded-sm
        ring-offset-4
        ring-offset-amber-400
        text-neutral-900
        hover:text-neutral-600
        transition-colors
        ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
        </button>
        <div role="menubar" class="
        hidden
        flex-col
        gap-4
        absolute
        z-40
        right-0
        left-0
        top-16
        bg-amber-400
        shadow-xl
        text-center
        text-lg
        p-6
        items-center
        lg:flex
        lg:flex-row
        lg:static
        lg:shadow-none
        lg:justify-content
        lg:w-full
        " aria-expanded="false aria-label="Open Menu">
            <a role="menuitem" class="
            py-1
            px-6
            dark:text-neutral-900
            focus-visible:ring-4
            ring-neutral-900
            rounded-sm
            ring-offset-4
            ring-offset-amber-400
            hover:text-neutral-600
            transition-colors
            font-medium
                " 
            
            href="/">Home</a>
            <a role="menuitem" class="
            py-1
            px-6
            dark:text-neutral-900
            focus-visible:ring-4
            ring-neutral-900
            rounded-sm
            ring-offset-4
            ring-offset-amber-400
            text-neutral-900
            hover:text-neutral-600
            transition-colors
            lg:mr-auto
            font-medium
                " 
            
            href="/">Contact</a>
            <a role="menuitem" class="
            py-1
            px-6
            dark:text-neutral-900
            focus-visible:ring-4
            ring-neutral-900
            rounded-sm
            ring-offset-4
            ring-offset-amber-400
            text-neutral-900
            hover:text-neutral-600
            transition-colors
            font-medium
                " 
            
            href="/">Login</a>
            <a role="menuitem" class="
            py-2
            px-6
            bg-teal-900
            text-white
            shadow-xl
            hover:shadow-none
            transition-shadow
            focus:outline-none
            dark:text-neutral-900
            focus-visible:ring-4
            ring-neutral-900
            rounded-md
            ring-offset-4
            ring-offset-amber-400
            hover:text-neutral-600
            font-medium
            " 
            
            href="/">Sign Up</a>
        </div>
    </div>
</nav>
<header class="relative pt-16 md:pt-24 lg:pt-48">
    <div class="
    absolute
    inset-0
    bottom-8
    md:bottom-24
    xl:bottom-32
    -z-10
    bg-gradient-to-b
    from-amber-400
    to-amber-600
    "></div>
    <div class="container 
    mx-auto
    grid
    grid-rows-1
    place-items-end
    px-2
    ">
        <img src="/asset/couch.png" class="row-start-1 row-end-2 col-start-1 col-end-2 mx-auto" alt="couch">
        <img src="/asset/app.svg" class="row-start-1 row-end-2 col-start-1 col-end-2 mx-auto w-40 sm:w-52 md:w-64 lg:w-72"  alt="couch">
    </div>
</header>

<main class="
grid
gap-12
sm:gap-16
md:gap-24
lg:gap-32
px-8
overflow-hidden

">

<a href="#" class="
            py-2
            px-6
            bg-amber-400
            dark:text-neutral-900
            mx-auto
            my-12
            flex
            gap-2
            shadow-xl
            hover:shadow-none
            transition-shadow
            focus:outline-none
            dark:text-neutral-900
            focus-visible:ring-4
            ring-neutral-900
            rounded-md
            ring-offset-4
            ring-offset-white
            dark:ring-amber-400
            dark:ring-offset-neutral-800
            hover:text-neutral-600
            font-medium
">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
      </svg>      
    <span>Download the App</span>
</a>
<section aria-labelledby="qualities" class="relative">
    <img src="/asset/dots.svg" class="
    hidden
    absolute
    lg:block
    top-1/2
    -translate-y-1/2
    -left-24
    xl:-left-7
    " alt="" aria-hidden="true">
    <img src="/asset/dots.svg" class="
    hidden
    absolute
    lg:block
    top-1/2
    -translate-y-1/2
    -right-24
    xl:-right-7
    " alt="" aria-hidden="true">
    <h2 id="qualities" class="sr-only">Our Qualities
    </h2>
    <div class="container
    m-auto
    max-w-5xl
    flex
    gap-12
    flex-wrap
    items-start
    justify-center
    md:justify-between
    ">
        <div class="grid 
        gap-4
        justify-items-center
        text-center
        md:flex-1

        ">
            <div class="rounded-full
            border-8
            border-amber-400
            hover:border-amber-600
            transition-border-color
            transition-duration
            p-4
            ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-14 w-14">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>                  
            </div>
            <h3 class="tex-3xl font-bold">Safe</h3>
            <p>Our products are secure and private out-of-the-box</p>
        </div>
        <div class="grid 
        gap-4
        justify-items-center
        text-center
        md:flex-1

        ">
            <div class="rounded-full
            border-8
            border-amber-400
            hover:border-amber-600
            transition-border-color
            transition-duration
            p-4
            ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-14 w-14">
                <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
              </svg>                 
            </div>
            <h3 class="tex-3xl font-bold">Efficient</h3>
            <p>Feel good about your wallet and the environment</p>
        </div>
        <div class="grid 
        gap-4
        justify-items-center
        text-center
        md:flex-1

        ">
            <div class="rounded-full
            border-8
            border-amber-400
            hover:border-amber-600
            transition-border-color
            transition-duration
            p-4
            ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-14 w-14">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>                  
            </div>
            <h3 class="tex-3xl font-bold">Proven</h3>
            <p>Leading the start home world for 10 years</p>
        </div>
    </div>
</section>

<section aria-labelledby="partners" class="text-center grip gap-8 place-items-center">
    <div class="grid gap-4">
        <h2 id="partners" class="text-4xl font-bold text-amber-400">Our Partners</h2>
        <p class="w-full max-w-lg">
            We're proud to be a part of some of the world's most renowned brands and organizations. We believe in using our products to make a positive impact on people's lives and the planet.
        </p>
    </div>
    <div class="flex flex-wrap gap-8 justify-center md:gap-x-16 max-w-2xl mx-auto">
      <div class="bg-white-dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/asset/partner1.svg" alt="partner1" class="h-16 w-16">

      </div>
      <div class="bg-white-dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/asset/partner2.svg" alt="partner1" class="h-16 w-16">
      </div>

      <div class="bg-white-dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/asset/partner3.svg" alt="partner1" class="h-16 w-16">
      </div>

      <div class="bg-white-dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/asset/partner4.svg" alt="partner1" class="h-16 w-16">
      </div>

      <div class="bg-white-dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/asset/partner5.svg" alt="partner1" class="h-16 w-16">

      </div>
      <div class="bg-white-dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/asset/partner6.svg" alt="partner1" class="h-16 w-16">

      </div>
      <div class="bg-white-dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/asset/partner7.svg" alt="partner1" class="h-16 w-16">

      </div>
    </div>
</section>

<section class="relative" aria-labelledby="home">
        <div class="flex flex-wrap-reverse gap-8 justify-center">
            <div class="flex gap-6 flex-wrap flex-col items-start lg:justify-center">
                <div class="flex flex-wrap flex-col items-start gap-2">
                    <h2 class="text-4xl font-bold">Relax, you're home!</h2>
                    <p class="max-w-md">
                        Our products are designed to make your life easier and more comfortable. We believe in creating a home that's as smart as you are.
                    </p>

                </div>
                <a href="#" class="
            py-2
            px-6
            bg-amber-400
            dark:text-neutral-900
            flex
            gap-2
            shadow-xl
            hover:shadow-none
            transition-shadow
            focus:outline-none
            dark:text-neutral-900
            focus-visible:ring-4
            ring-neutral-900
            rounded-md
            ring-offset-4
            ring-offset-white
            dark:ring-amber-400
            dark:ring-offset-neutral-800
            hover:text-neutral-600
            font-medium
            ">
        
            Sign Up
            </a>
            </div>
            <img src="/asset/table.png" alt="table">
        </div>
        
        <div class="
        bg-teal-900
        h-24
        xl:h-48
        -mx-8
        mt-12
        xl:mt-0
        xl:absolute
        w-screen
        -bottom-8
        -z-10

        "></div>
</section>
</main>
<section aria-labelledby="contact" class="container mx-auto overflow-hidden">
    <div class="flex flex-wrap justify-center gap-12 md:gap-6 lg:gap-20">
        <div class="md:flex-1 md:max-w-sm relative">
            <div">
                <img src="/asset/lamp.png" alt="Lamp" class="mx-auto">
                <a href="#" class="
                py-2
                px-6
                bg-amber-400
                dark:text-neutral-900
                w-max
                flex
                gap-2
                mx-auto
                mt-12
                md:mb-12
                shadow-xl
                hover:shadow-none
                transition-shadow
                focus:outline-none
                dark:text-neutral-900
                focus-visible:ring-4
                ring-neutral-900
                rounded-md
                ring-offset-4
                ring-offset-white
                dark:ring-amber-400
                dark:ring-offset-neutral-800
                hover:text-neutral-600
                font-medium
                ">
            
                Download the App
                </a>
                <img src="/asset/app.svg" alt="app" width="240" class="hidden md:block  drop-shadow-xl absolute left-1/2 -translate-x-1/2 max-w-20 xl:max-w-xs">
                <div class="
                absolute
                -bottom-18
                left-1/2
                -translate-x-1/2
                -z-10
                aspect-square
                md:border-8
                border-amber-400
                rounded-full
                md:w-72
                lg:w-96
                "></div>
            </div>
            <form class="
            relative
            border-8
            border-neutral-900
            p-6
            rounded-lg
            grid
            gap-8
            md:flex-1
            md:max-w-lg
            my-4
            md:my-12
            lg:my-16
            bg:white
            dark:bg-neutral-800
            w-full

            ">
            <h2 id="contact" class="text-3xl font-bold">Let's connect</h2>
            <div class="relative">
                <input type="text" placeholder="Your Name" id="name" class="form-input 
                peer
                w-full
                border-4
                border-amber-400
                rounded-md
                focus:outline-none
                focus:ring-4
                dark:focus:ring-offset-2
                focus:ring-amber-400
                focus:border-amber-400
                dark:border-neutral-400
                dark:text-neutral-900
                placeholder-transparent
                
                
                ">
                <label for="name" class="
                text-neutral-500
                text-sm
                font-bold
                uppercase
                absolute
                -top-4
                left-2
                transition-all
                -translate-y-1/2
                peer-placeholder-shown:left-4
                peer-placeholder-shown:top-1/2
                peer-placehoder-shown:text-neutral-900
                peer-focus:-top-4
                peer-focus:-left-2
                dark:peer-focus:-neutal-300

                ">Your Name</label>
            </div>
            <div class="relative">
                <input type="email" placeholder="email" id="email" class="form-input 
                peer
                w-full
                border-4
                border-amber-400
                rounded-md
                focus:outline-none
                focus:ring-4
                dark:focus:ring-offset-2
                focus:ring-amber-400
                focus:border-amber-400
                dark:border-neutral-400
                dark:text-neutral-900
                placeholder-transparent
                
                
                ">
                <label for="name" class="
                text-neutral-500
                text-sm
                font-bold
                uppercase
                absolute
                -top-4
                left-2
                transition-all
                -translate-y-1/2
                peer-placeholder-shown:left-4
                peer-placeholder-shown:top-1/2
                peer-placehoder-shown:text-neutral-900
                peer-focus:-top-4
                peer-focus:left-2
                peer-focus:text-neutal-600
                dark:peer-focus:text-neutal-300

                ">Your Email</label>
            </div>
            <div class="relative">
                <textarea name="content"  id="contente"  cols="20" rows="5" class="
                    form-textarea
                    resize-none
                    peer
                    w-full
                    border-4
                    border-amber-400
                    rounded-md
                    focus:outline-none
                    focus:ring-4
                    dark:focus:ring-offset-2
                    focus:ring-amber-400
                    focus:border-amber-400
                    dark:border-neutral-400
                    dark:text-neutral-900
                    placeholder-transparent" placeholder="How can we help?"
                ></textarea>
                <label for="content" class="
                     text-neutral-500
                    text-sm
                    font-bold
                    uppercase
                    absolute
                    -top-3
                    left-2
                    transition-all
                    -translate-y-1/2
                    peer-placeholder-shown:left-4
                    peer-placeholder-shown:top-6
                    peer-placehoder-shown:text-neutral-900
                    peer-focus:-top-4
                    peer-focus:left-2
                    peer-focus:text-neutal-600
                    dark:peer-focus:text-neutal-300
                ">How can we help?</label>
            </div>
            <a role="menuitem" class="
            py-2
            px-6
            bg-neutral-900
            text-white
            w-max
            shadow-xl
            hover:shadow-none
            transition-shadow
            focus:outline-none
            focus-visible:ring-4
            ring-neutral-900
            rounded-md
            ring-offset-4
            ring-offset-white
            dark:ring-offset-amber-400
            font-medium
            " 
            
            href="/">Sign Up</a>
        </form>
        </div>
    </div>
</section>

         
    <script>
        const navBtn = document.querySelector('#menu');
        const menuBar = document.querySelector('div[role="menubar"]');

        menu.addEventListener('click', () => {
            const isExpanded = JSON.parse(navBtn.getAttribute('aria-expanded'));
            navBtn.setAttribute('aria-expanded', !isExpanded);
            menuBar.classList.toggle('hidden');
            menuBar.classList.toggle('flex');
        });
    </script>
</body>
</html>