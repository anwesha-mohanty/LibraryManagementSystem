<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Probably the most complete UI kit out there. Multiple functionalities and controls added,  extended color palette and beautiful typography, designed as its own extended version of Bootstrap at  the highest level of quality.                             ">
    <meta name="author" content="Webpixels">
    <title>Literarium Library</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link type="text/css" href="{{ asset('boomerang/assets/css/theme.css') }}" rel="stylesheet">
    <!-- Demo CSS - No need to use these in your project -->
    <link type="text/css" href="{{ asset('boomerang/assets/css/demo.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark py-4">
        <div class="container">
          <a class="navbar-brand " href="./"><strong>Literarium</strong> Library</a>
          <button class="navbar-toggler" type="button" data-action="offcanvas-open" data-target="#navbar_main" aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse offcanvas-collapse" id="navbar_main">
            <ul class="navbar-nav ml-auto align-items-lg-center">
              <h6 class="dropdown-header font-weight-600 d-lg-none px-0">Menu</h6>
              <li class="nav-item active ">
                <a class="nav-link btn " href="./login" >Login/Sign Up</a>
              </li>
              <li class="nav-item dropdown nav-item active ">
                <a class="nav-link dropdown-toggle nav-link btn " href="#" id="navbar_main_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Browse Books</a>
                <div class="dropdown-menu" aria-labelledby="navbar_1_dropdown_1">
                  <a class="dropdown-item" href="./pages/homepage.html">Homepage</a>
                  <a class="dropdown-item" href="./pages/about.html">About us</a>
                  <a class="dropdown-item" href="./pages/sign-in.html">Sign in</a>
                  <a class="dropdown-item" href="./pages/contact.html">Contact</a>
                </div>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./docs/introduction.html">About Us</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Get in touch</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="app" class="container">
      <div  class="row lg-auto">
          <h1>
            <strong>About Us</strong>
            <example-component></example-component>
        </h1>
      </div>
      </div>
      <div id="wrapper">
        <div id="page" class="container">
            <div class="row lg-auto">
                <div id="content">
                    <div class="title">
                        <p style="font-size: medium">We started out as a group of 5 enthusiastic readers
                            meeting every week to discuss books and have grown into a full fledged library that houses over 5,000 books,magazines and journals.
                    </div>
                </div>
        </div>
        </div>
      </div>

  </body>
</html>
