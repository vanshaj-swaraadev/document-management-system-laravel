<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Document Management</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net" />
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Styles / Scripts -->
  @if (
    file_exists(public_path('build/manifest.json')) ||
    file_exists(public_path('hot'))
  ) @vite([
    'resources/css/app.css',
    'resources/js/app.js'
  ]) @else @endif
</head>
<style>
  :root {
    --blue: #199ebf;
  }

  a {
    color: #199ebf;
    text-decoration: underline;
  }

  li {
    list-style-type: disc;
  }

  .show-menu-toggle {}
</style>

<body class="relative bg-transparent">
  <!------------------------------------------------ Header ------------------------------------------------>
  <header class="fixed !bg-transparent w-full">
    <div class="relative">
      <!-- Sub-header -->
      <div class="sub-header bg-[#269FBD]">
        <div class="container mx-auto text-white flex justify-between items-center gap-2">
          <div></div>
          <div class="flex justify-center items-center p-1 gap-2">
            <svg class="w-6 h-6 text-[#FFAA1F]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd"
                d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                clip-rule="evenodd" />
            </svg>
            <p>Member Login</p>
          </div>
        </div>
      </div>

      <!-- Main Header -->
      <div class="header !sticky top-0 z-[1000] shadow-md p-4 !bg-white/90">
        <div class="container mx-auto flex justify-between items-center gap-4">
          <!-- Logo -->
          <div>
            <img width="150" src="/logo.png" alt="Logo" />
          </div>

          <!-- Navigation for Desktop and Mobile -->
          <div class="flex justify-start items-center w-full text-black lg:flex lg:w-auto lg:space-x-6 !w-full">
            <!-- Desktop Menu (visible on md and larger) -->
            <div class="hidden lg:flex space-x-3 w-full justify-start">
              <div class="group hover:text-[#199ebf] p-2 xl:p-4 relative text-gray-700">
                <div class="flex justify-center items-center gap-1">
                  Education
                  <span class="w-4 group-hover:hidden">+</span>
                  <span class="w-4 hidden group-hover:block">-</span>
                </div>
                <div
                  class="absolute left-0 mt-2 w-48 text-[#269FBD] top-10 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-200">
                  <a href="#" class="no-underline block px-4 py-2 hover:bg-[#269FBD] hover:text-white">Training
                    Courses</a>
                  <a href="#" class="no-underline block px-4 py-2 hover:bg-[#269FBD] hover:text-white">Certification</a>
                </div>
              </div>
              <!-- Add more menu items as needed -->
              <div class="group hover:text-[#199ebf] p-2 xl:p-4 relative text-gray-700">
                <div class="flex justify-center items-center gap-1">
                  Education
                  <span class="w-4 group-hover:hidden">+</span>
                  <span class="w-4 hidden group-hover:block">-</span>
                </div>
                <div
                  class="absolute left-0 mt-2 w-48 text-[#269FBD] top-10 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-200">
                  <a href="#" class="no-underline block px-4 py-2 hover:bg-[#269FBD] hover:text-white">Training
                    Courses</a>
                  <a href="#" class="no-underline block px-4 py-2 hover:bg-[#269FBD] hover:text-white">Certification</a>
                </div>
              </div>
              <!-- Add more menu items as needed -->
              <div class="group hover:text-[#199ebf] p-2 xl:p-4 relative text-gray-700">
                <div class="flex justify-center items-center gap-1">
                  Education
                  <span class="w-4 group-hover:hidden">+</span>
                  <span class="w-4 hidden group-hover:block">-</span>
                </div>
                <div
                  class="absolute left-0 mt-2 w-48 text-[#269FBD] top-10 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-200">
                  <a href="#" class="no-underline block px-4 py-2 hover:bg-[#269FBD] hover:text-white">Training
                    Courses</a>
                  <a href="#" class="no-underline block px-4 py-2 hover:bg-[#269FBD] hover:text-white">Certification</a>
                </div>
              </div>
              <!-- Add more menu items as needed -->
              <div class="group hover:text-[#199ebf] p-2 xl:p-4 relative text-gray-700">
                <div class="flex justify-center items-center gap-1">
                  Education
                  <span class="w-4 group-hover:hidden">+</span>
                  <span class="w-4 hidden group-hover:block">-</span>
                </div>
                <div
                  class="absolute left-0 mt-2 w-48 text-[#269FBD] top-10 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-200">
                  <a href="#" class="no-underline block px-4 py-2 hover:bg-[#269FBD] hover:text-white">Training
                    Courses</a>
                  <a href="#" class="no-underline block px-4 py-2 hover:bg-[#269FBD] hover:text-white">Certification</a>
                </div>
              </div>
              <!-- Add more menu items as needed -->
              <div class="group hover:text-[#199ebf] p-2 xl:p-4 relative text-gray-700">
                <div class="flex justify-center items-center gap-1">
                  Education
                  <span class="w-4 group-hover:hidden">+</span>
                  <span class="w-4 hidden group-hover:block">-</span>
                </div>
                <div
                  class="absolute left-0 mt-2 w-48 text-[#269FBD] top-10 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-200">
                  <a href="#" class="no-underline block px-4 py-2 hover:bg-[#269FBD] hover:text-white">Training
                    Courses</a>
                  <a href="#" class="no-underline block px-4 py-2 hover:bg-[#269FBD] hover:text-white">Certification</a>
                </div>
              </div>
              <!-- Add more menu items as needed -->
            </div>
          </div>

          <!-- Right Button -->
          <div class="flex justify-center items-center gap-4">
            <button class="hidden md:block px-7 py-2 rounded-md text-white whitespace-nowrap bg-[#FFAA1F]">Become a
              Member</button>
            <svg class="w-[30px] h-[30px] text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
            </svg>
            <!-- Mobile Hamburger Menu Button -->
            <button class="lg:hidden p-4 text-gray-700 hover:text-[#199ebf]" id="hamburger-btn">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

  </header>
  <!-- Mobile Menu (hidden by default on larger screens) -->
  <div id="mobile-menu"
    class="lg:hidden fixed size-full bg-white flex justify-center items-center shadow-md z-[999] transition-all z-[9999999] -translate-x-[200%]">
    <div class="flex flex-col justify-center items-center p-4 space-y-4 size-full relative">
      <svg id="close-btn" class="absolute top-2 right-2 size-6 text-gray-800" aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M6 18 17.94 6M18 18 6.06 6" />
      </svg>
      <a href="#" class="text-[#269FBD] hover:bg-[#199ebf] px-4 py-2">Education</a>
      <a href="#" class="text-[#269FBD] hover:bg-[#199ebf] px-4 py-2">Services</a>
      <a href="#" class="text-[#269FBD] hover:bg-[#199ebf] px-4 py-2">Contact</a>
      <button class="px-7 py-2 rounded-md text-white whitespace-nowrap bg-[#FFAA1F]">Become a Member</button>
    </div>
  </div>

  <script>
    // JavaScript for Hamburger Menu Toggle
    const hamburgerBtn = document.getElementById("hamburger-btn");
    const closeBtn = document.getElementById("close-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    hamburgerBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("-translate-x-[200%]");
    });
    closeBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("-translate-x-[200%]");
    });
  </script>



  <!------------------------------------------------ hero ------------------------------------------------>
  <section class="bg-[url('/public/hero.jpg')] text-white bg-cover bg-center h-full h-[90vh] sm:h-[70vh]">
    <div
      class="bg-[linear-gradient(116deg,rgba(0,137,255,.83)_0,rgba(0,137,255,.5)_51.9%,rgba(0,137,255,.16)_52%,rgba(0,137,255,0)_100%)] !size-full flex justify-center items-center">
      <div class="container mx-auto my-auto p-4">
        <h2 class="text-3xl sm:text-4xl lg:text-6xl font-semibold">Intelligent <br> Information <br> Management Glossary
        </h2>
        <p class="text-lg max-w-[400px] mt-5">Not sure what something means? We have you covered! We've defined many of
          the key terms in Intelligent
          Information Management for you.
        </p>
      </div>
    </div>
  </section>

  <!------------------------------------------------ Content ------------------------------------------------>

  <section class="container mx-auto py-20 p-4">
    <h2 class="text-2xl md:text-3xl text-gray-700 font-semibold mb-5">What is Document Management (DMS)?</h2>
    <div class="space-y-3 text-base sm:text-lg">
      <p>
        Document management, often referred to as Document Management
        Systems (DMS), is the use of a computer system and software to
        store, manage and track electronic documents and electronic
        images of <a href="#">
          paper-based information captured through the use of a
          document scanner.
        </a>
      </p>
      <p>
        Document management is how your organization stores, manages,
        and tracks its electronic documents.
      </p>
      <p>
        According to ISO 12651-2, a document is "recorded information or
        object which can be treated as a unit." While this sounds a
        little complicated, it is quite simply what you have been using
        to create, distribute and use for years.
      </p>
      <p>
        Now, we can define document management as the software that
        controls and organizes documents throughout an organization. It
        incorporates document and content capture, workflow, document
        repositories, COLD/ERM, and output systems, and information
        retrieval systems. Also, the processes used to track, store, and
        control documents.
      </p>
      <hr />
      <p class="py-3 text-lg sm:text-xl">
        <a href="#">
          Attention Visual Learners: Click here to SEE how this term relates to Intelligent Information Management
          (IIM).
        </a>
      </p>
      <hr />
      <p>Document management is one of the precursor technologies to content management, and not all that long ago was
        available solely on a standalone basis like its imaging, workflow, and archiving brethren. It provides some of
        the most basic functionality to content management, imposing controls and management capabilities onto otherwise
        “dumb” documents. This makes it so that when you have documents and need to use them, you are able to do so.
        Some of the key features in document management include:
      </p>
      <ul class="ml-10 space-y-2">
        <li> Check-in/check-out and locking, to coordinate the simultaneous editing of a document, so one person’s
          changes don’t overwrite another’s </li>
        <li> Version control, so tabs can be kept on how the current document came to be and how it differs from the
          versions that came before </li>
        <li> Roll-back, to “activate” a prior version in case of an error or premature release </li>
        <li> Audit trail, to permit the reconstruction of who did what to a document during the course of its life in
          the system
          Annotation and Stamps,</li>
      </ul>

      <p>

        Document management eventually was subsumed into content management in no small measure because there is more
        information available to us today than ever before, and most of it is not being created by us. Thanks to the
        mainstreaming of a whole range of sources like the Web, thumb drives, smartphones, etc., the need has
        accelerated to deal with information of all kinds: not just in terms of more media types like text vs. images
        vs. voice files, but also in terms of how structured – and thus how readily managed – it all is.

      </p>
      <p>

        Document management systems today range in size and scope from small, standalone systems to large scale
        enterprise-wide configurations serving a global audience. Many document management systems provide a means to
        incorporate standard physical document filing practices electronically. These include:
      </p>
      <ul class="ml-10">

        <li>Storage location</li>
        <li>Security and access control</li>
        <li>Version control</li>
        <li>Audit trails</li>
        <li>Check-in/check-out and document lockdown.</li>
      </ul>
      <p>
        Document management, while still recognized and utilized independently, it is also a common component found
        within an Enterprise Content Management environment.
      </p>



    </div>
  </section>





  <footer class="bg-[#269FBD] ">
    <div
      class="container text-white mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-4 sm:gap-2 md:gap-0 px-4 py-10">
      <div>
        <h4 class="font-bold text-xl">Education</h4>
        <p>Education</p>
        <p>Certification</p>
      </div>

      <div>
        <h4 class="font-bold text-xl">Events
        </h4>
        <p>Upcoming Events</p>
        <p>AI+IM Global Summit</p>
      </div>

      <div>
        <h4 class="font-bold text-xl">Resources</h4>
        <p>Resource Center</p>
        <p>Job Center</p>
        <p>Buyers' Guide</p>
      </div>

      <div>
        <div class="mb-4">
          <h4 class="font-bold text-xl">Community</h4>
          <p>Online Community</p>
          <p>Chapters and SIGs</p>
          <p>Awards</p>
        </div>
        <div>
          <h4 class="font-bold text-xl">Join AIIM</h4>
          <p>Subscribe to AIIM's Blog</p>
          <p>Become a Member</p>
        </div>
      </div>

      <div>
        <div class="mb-4">
          <h4 class="font-bold text-xl">About</h4>
          <p>About Us</p>
          <p>Contact Us</p>
        </div>
        <div>
          <h4 class="font-bold text-xl">Solution Provider Programs</h4>
          <p>Trade Memberships</p>
          <p>Become a Sponsor</p>
        </div>
      </div>

      <div class="relative flex justify-start py-10 sm:py-0 sm:justify-center items-center xl:justify-end xl:items-end">
        <img class="" width="150" src="/logo-black.png" alt="">
      </div>


    </div>

    <div class="bg-[#36424A] px-4 py-10 text-white">
      <div class="container flex justify-between items-center mx-auto">
        <p>Copyright © 2025 Association for Intelligent Information Management. All rights reserved. <br> Privacy Policy
        </p>
        <div class="flex justify-center items-center gap-4">
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
              clip-rule="evenodd" />
          </svg>
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
              clip-rule="evenodd" />
            <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
          </svg>
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
              clip-rule="evenodd" />
          </svg>
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
              clip-rule="evenodd" />
          </svg>

        </div>
      </div>
    </div>
  </footer>
</body>

</html>