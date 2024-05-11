<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="img/favicon.ico" rel="icon" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
{{--
    <link href="css/style.css" rel="stylesheet" /> --}}

    <link href={{ asset('assets/css/style.css') }} rel="stylesheet" />
   </head>
  <body>
    <header>
      <nav
        class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0"
      >
        <div class="navbar-brand-container">
          <a href="index.html" class="navbar-brand ms-lg-5">
            <span class="logo-safe">Thay</span><span class="logo-cam">Loi</span>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="./product.html" class="nav-item nav-link">Products</a>
            <a href="./product_detail.html" class="nav-item nav-link"
              >Products Detail</a
            >
            <a href="contact.html" class="nav-item nav-link">Contact</a>
            <div class="nav-item search-container">
              <input
                type="text"
                placeholder="Search..."
                class="search-input py-2 px-4 rounded ml-3"
                style="border: 1px solid black"
              />
              <button
                type="submit"
                class="search-button btn btn-link"
                style="color: blue; border: none; background: none"
              >
                <i class="bi bi-search" style="font-size: 24px"></i>
              </button>
            </div>
            <a href="#" class="nav-item nav-link"
              ><i class="bi bi-person"></i>Login</a
            >
            <a href="cart.html" class="nav-item nav-link"
              ><i class="bi bi-cart"></i>Cart</a
            >
          </div>
        </div>
      </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
      <div class="container-fluid bg-dark text-light py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h3 class="text-white mb-4">Get In Touch</h3>
              <p><i class="bi bi-geo-alt"></i> HITU College</p>
              <p><i class="bi bi-envelope-open"></i> thayloi@example.com</p>
              <p><i class="bi bi-telephone"></i> +012 345 67890</p>
            </div>
            <div class="col-lg-3 col-md-6">
              <h3 class="text-white mb-4">Follow Us</h3>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="facebook"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a href="#" class="linkedin"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a href="#" class="instagram"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-primary text-light py-4">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start">
              <p class="mb-md-0">
                &copy; <a href="#">Your Site Name</a>. All Rights Reserved.
              </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <p class="mb-0">
                Designed by <a href="https://htmlcodex.com">HTML Codex</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script>
      let slideIndex = 1;
      showSlides(slideIndex);
      function moveSlide(n) {
        showSlides((slideIndex += n));
      }
      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slide");
        if (n > slides.length) {
          slideIndex = 1;
        }
        if (n < 1) {
          slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
      }
    </script>
  </body>
</html>
