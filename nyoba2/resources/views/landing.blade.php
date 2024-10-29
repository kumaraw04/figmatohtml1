<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faeyza Rafif Kumara Wardananto XI PPLG 5</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
  <header class="bg-white shadow">
    <nav class="flex justify-between items-center p-5">
      <div class="text-2xl font-bold">MNTN</div>
      <ul class="flex space-x-6">
        <li><a href="#" class="hover:text-blue-500">Equipment</a></li>
        <li><a href="#" class="hover:text-blue-500">About</a></li>
        <li><a href="#" class="hover:text-blue-500">Blog</a></li>
        <li><a href="#" class="user-icon text-blue-600" id="loginBtn">Login</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <section class="hero bg-cover bg-center h-96 flex items-center justify-center" style="background-image: url('{{ asset('images/hero-image.jpg') }}');">
      <div class="text-center text-white">
        <h1 class="text-4xl font-extrabold">Be Prepared For The<br>Mountains And Beyond!</h1>
        <a href="#" class="mt-4 bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Get Started</a>
      </div>
    </section>
  
    <section class="slide py-10">
      <div class="flex flex-col md:flex-row items-center max-w-6xl mx-auto p-5">
        <div class="slide-text md:w-1/2">
          <h2 class="text-3xl font-semibold">What level of hiker are you?</h2>
          <p class="mt-2">Determining what level of hiker you are can be an important tool when planning future hikes. This hiking level guide will help you plan hikes according to different hike ratings set by various websites like All Trails and Modern Hiker.</p>
          <a href="#" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">read more</a>
        </div>
        <div class="slide-image md:w-1/2 mt-4 md:mt-0">
          <img src="{{ asset('images/1.png') }}" alt="Hiker on Mountain" class="w-full h-auto rounded shadow-lg">
        </div>
      </div>
    </section>    
  
    <section class="slide py-10">
      <div class="flex flex-col md:flex-row items-center max-w-6xl mx-auto p-5">
        <div class="slide-image md:w-1/2">
          <img src="{{ asset('images/2.png') }}" alt="Hiking Gear" class="w-full h-auto rounded shadow-lg">
        </div>
        <div class="slide-text md:w-1/2 mt-4 md:mt-0">
          <h2 class="text-3xl font-semibold">Picking the right Hiking Gear!</h2>
          <p class="mt-2">The nice thing about beginning hiking is that you don't really need any special gear, you can probably get away with things you already have. Let's start with clothing. A typical mistake hiking beginners make is wearing jeans and regular clothes, which will get heavy and chafe if they get sweaty or wet.</p>
          <a href="#" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">read more</a>
        </div>
      </div>
    </section>
  
    <section class="slide py-10">
      <div class="flex flex-col md:flex-row items-center max-w-6xl mx-auto p-5">
        <div class="slide-text md:w-1/2">
          <h2 class="text-3xl font-semibold">Understand Your Map & Timing</h2>
          <p class="mt-2">To start, print out the hiking guide and map. If it's raining, throw them in a Zip-Lock bag. Read over the guide, study the map, and have a good idea of what to expect. I like to know what my next landmark is as I hike. For example, I'll read the guide and know that, in a mile, I make a right turn at the junction.</p>
          <a href="#" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">read more</a>
        </div>
        <div class="slide-image md:w-1/2 mt-4 md:mt-0">
          <img src="{{ asset('images/3.png') }}" alt="Map and Compass" class="w-full h-auto rounded shadow-lg">
        </div>
      </div>
    </section>
  </main>
  
  <footer class="bg-white p-5 mt-10 shadow">
    <div class="footer-content max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
      <div class="footer-section">
        <h3 class="text-lg font-bold">MNTN</h3>
        <p>Get out there & discover your next slope, mountain & destination!</p>
      </div>
      <div class="footer-section">
        <h3 class="text-lg font-bold">More on The Blog</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-blue-500">About MNTN</a></li>
          <li><a href="#" class="hover:text-blue-500">Contributors & Writers</a></li>
          <li><a href="#" class="hover:text-blue-500">Write For Us</a></li>
          <li><a href="#" class="hover:text-blue-500">Contact Us</a></li>
          <li><a href="#" class="hover:text-blue-500">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3 class="text-lg font-bold">More on MNTN</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-blue-500">The Team</a></li>
          <li><a href="#" class="hover:text-blue-500">Jobs</a></li>
          <li><a href="#" class="hover:text-blue-500">Press</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom text-center mt-5">
      <p class="text-gray-600">&copy; 2023 MNTN, Inc. Terms & Privacy</p>
    </div>
  </footer>

  <!-- Login Modal -->
  <div id="loginModal" class="modal fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="modal-content bg-white rounded-lg shadow-lg p-8">
      <span class="close absolute top-4 right-4 cursor-pointer text-gray-500">&times;</span>
      <div id="loginForm">
        <h2 class="text-2xl font-bold">Login to Your Account</h2>
        <form action="#" method="post">
          <label for="username" class="block mt-4">Username</label>
          <input type="text" id="username" name="username" required class="border border-gray-300 p-2 rounded w-full">

          <label for="password" class="block mt-4">Password</label>
          <input type="password" id="password" name="password" required class="border border-gray-300 p-2 rounded w-full">

          <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Login</button>
          <div class="link-container mt-2">
            <p><a href="#" id="showRegister" class="text-blue-600 hover:underline">Register here</a></p>
          </div>
        </form>
      </div>
      <div id="registerForm" style="display: none;">
        <h2 class="text-2xl font-bold">Register</h2>
        <form action="#" method="post">
          <label for="regUsername" class="block mt-4">Username</label>
          <input type="text" id="regUsername" name="username" required class="border border-gray-300 p-2 rounded w-full">

          <label for="regPassword" class="block mt-4">Password</label>
          <input type="password" id="regPassword" name="password" required class="border border-gray-300 p-2 rounded w-full">

          <label for="regEmail" class="block mt-4">Email</label>
          <input type="email" id="regEmail" name="email" required class="border border-gray-300 p-2 rounded w-full">

          <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Register</button>
          <div class="link-container mt-2">
            <p><a href="#" id="showLogin" class="text-blue-600 hover:underline">Login here</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    // Get the modal
    var modal = document.getElementById("loginModal");

    // Get the button that opens the modal
    var btn = document.getElementById("loginBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // Get forms
    var loginForm = document.getElementById("loginForm");
    var registerForm = document.getElementById("registerForm");

    // Get links
    var showRegister = document.getElementById("showRegister");
    var showLogin = document.getElementById("showLogin");

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.classList.remove("hidden");
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.classList.add("hidden");
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.classList.add("hidden");
      }
    }

    // Show register form
    showRegister.onclick = function(e) {
      e.preventDefault();
      loginForm.style.display = "none";
      registerForm.style.display = "block";
    }

    // Show login form
    showLogin.onclick = function(e) {
      e.preventDefault();
      registerForm.style.display = "none";
      loginForm.style.display = "block";
    }
  </script>
</body>
</html>
