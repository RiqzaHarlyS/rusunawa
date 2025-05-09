<nav class="bg-[#1A7F30]">
    <div class="container mx-auto px-4">
      <div class="relative flex h-16 items-center">
        <!-- Logo section (left) -->
        <div class="flex items-center space-x-1">
          <!-- Logos -->
          <div class="flex space-x-1">
            <img class="h-9 w-auto" src="/img/logo.png" alt="Logo Tut Wuri">
          </div>
          
          <!-- Text beside logos -->
          <div class="ml-2 text-white">
            <div class="text-lg">Rusunawa</div>
            <div class="text-sm">Universitas Siliwangi</div>
          </div>
        </div>
        
        <!-- Navigation Links (center) -->
        <div class="hidden sm:flex flex-1 justify-center">
          <div class="flex space-x-4">
            <a href="/" class="text-white hover:bg-white hover:text-[#1A7F30] px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200 active-nav" id="nav-home">Home</a>
            <a href="/about" class="text-white hover:bg-white hover:text-[#1A7F30] px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200" id="nav-about">About</a>
            <a href="/fasilitas" class="text-white hover:bg-white hover:text-[#1A7F30] px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200" id="nav-fasilitas">Fasilitas</a>
            <a href="/pendaftaran" class="text-white hover:bg-white hover:text-[#1A7F30] px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200" id="nav-pendaftaran">Pendaftaran</a>
            <a href="/pengumuman" class="text-white hover:bg-white hover:text-[#1A7F30] px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200" id="nav-pengumuman">Pengumuman</a>
          </div>
        </div>
        
        <!-- Login link (right) -->
        <div class="hidden sm:flex items-center">
          <a href="/admin" class="text-white hover:bg-white hover:text-[#1A7F30] px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200" id="nav-login">Login</a>
        </div>
        
        <!-- Mobile menu button -->
        <div class="sm:hidden ml-auto">
          <button type="button" class="text-white hover:text-gray-200" id="mobile-menu-button">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    
    <!-- Mobile menu, hidden by default -->
    <div class="hidden sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <a href="/" class="text-white hover:bg-white hover:text-[#1A7F30] block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200" id="mobile-nav-home">Home</a>
        <a href="/about" class="text-white hover:bg-white hover:text-[#1A7F30] block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200" id="mobile-nav-about">About</a>
        <a href="/fasilitas" class="text-white hover:bg-white hover:text-[#1A7F30] block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200" id="mobile-nav-fasilitas">Fasilitas</a>
        <a href="/pendaftaran" class="text-white hover:bg-white hover:text-[#1A7F30] block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200" id="mobile-nav-pendaftaran">Pendaftaran</a>
        <a href="/pengumuman" class="text-white hover:bg-white hover:text-[#1A7F30] block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200" id="mobile-nav-pengumuman">Pengumuman</a>
        <a href="/admin" class="text-white hover:bg-white hover:text-[#1A7F30] block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200" id="mobile-nav-login">Login</a>
      </div>
    </div>
  </nav>
  
  <style>
    /* Add a small CSS for active nav items */
    .active-nav {
      background-color: white;
      color: #1A7F30;
      font-weight: 600;
    }
  </style>
  
  <script>
    // JavaScript for handling active nav items and mobile menu
    document.addEventListener('DOMContentLoaded', function() {
      // Get current page path
      const currentPath = window.location.pathname;
      
      // Function to set active nav item
      function setActiveNavItem() {
        // Reset all nav items
        document.querySelectorAll('.active-nav').forEach(item => {
          item.classList.remove('active-nav');
        });
        
        // Set active based on path
        if (currentPath.includes('about')) {
          document.getElementById('nav-about').classList.add('active-nav');
          if (document.getElementById('mobile-nav-about')) {
            document.getElementById('mobile-nav-about').classList.add('active-nav');
          }
        } else if (currentPath.includes('fasilitas')) {
          document.getElementById('nav-fasilitas').classList.add('active-nav');
          if (document.getElementById('mobile-nav-fasilitas')) {
            document.getElementById('mobile-nav-fasilitas').classList.add('active-nav');
          }
        } else if (currentPath.includes('pendaftaran')) {
          document.getElementById('nav-pendaftaran').classList.add('active-nav');
          if (document.getElementById('mobile-nav-pendaftaran')) {
            document.getElementById('mobile-nav-pendaftaran').classList.add('active-nav');
          }
        } else if (currentPath.includes('pengumuman')) {
          document.getElementById('nav-pengumuman').classList.add('active-nav');
          if (document.getElementById('mobile-nav-pengumuman')) {
            document.getElementById('mobile-nav-pengumuman').classList.add('active-nav');
          }
        } else if (currentPath.includes('admin')) {
          document.getElementById('nav-login').classList.add('active-nav');
          if (document.getElementById('mobile-nav-login')) {
            document.getElementById('mobile-nav-login').classList.add('active-nav');
          }
        } else if (currentPath === '/' || currentPath === '') {
          // Default to home
          document.getElementById('nav-home').classList.add('active-nav');
          if (document.getElementById('mobile-nav-home')) {
            document.getElementById('mobile-nav-home').classList.add('active-nav');
          }
        }
      }
      
      // Set active nav item on page load
      setActiveNavItem();
      
      // Toggle mobile menu
      const mobileMenuButton = document.getElementById('mobile-menu-button');
      const mobileMenu = document.getElementById('mobile-menu');
      
      if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
          mobileMenu.classList.toggle('hidden');
        });
      }
    });
  </script>