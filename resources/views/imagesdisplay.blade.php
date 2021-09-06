@extends('layouts.app')

<div class="cont">
    <div class="page-head">
      <h1>lightgallery <span class="version">V0.0.1</span></h1>
      <p class="lead">Full featured lightbox gallery. Zero dependencies.</p><a href="https://github.com/sachinchoolur/lightgallery.js" class="btn btn-primary btn-lg">View on github</a></div>

    <div class="demo-gallery">
      <ul id="lightgallery">
        <li data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/1-375.jpg 375, https://sachinchoolur.github.io/lightgallery.js/static/img/1-480.jpg 480, https://sachinchoolur.github.io/lightgallery.js/static/img/1.jpg 800" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg"
        data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
          <a href="">
            <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-1.jpg">
            <div class="demo-gallery-poster">
              <img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png">
            </div>
          </a>
        </li>
        <li data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/2-375.jpg 375, https://sachinchoolur.github.io/lightgallery.js/static/img/2-480.jpg 480, https://sachinchoolur.github.io/lightgallery.js/static/img/2.jpg 800" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg"
        data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
          <a href="">
            <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-2.jpg">
            <div class="demo-gallery-poster">
              <img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png">
            </div>
          </a>
        </li>
        <li data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/13-375.jpg 375, https://sachinchoolur.github.io/lightgallery.js/static/img/13-480.jpg 480, https://sachinchoolur.github.io/lightgallery.js/static/img/13.jpg 800" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg"
        data-sub-html="<h4>Sunset Serenity</h4><p>A gorgeous Sunset tonight captured at Coniston Water....</p>">
          <a href="">
            <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-13.jpg">
            <div class="demo-gallery-poster">
              <img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png">
            </div>
          </a>
        </li>
        <li data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/4-375.jpg 375, https://sachinchoolur.github.io/lightgallery.js/static/img/4-480.jpg 480, https://sachinchoolur.github.io/lightgallery.js/static/img/4.jpg 800" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg"
        data-sub-html="<h4>Coniston Calmness</h4><p>Beautiful morning</p>">
          <a href="">
            <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-4.jpg">
            <div class="demo-gallery-poster">
              <img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png">
            </div>
          </a>
        </li>
      </ul>
      <span class="small">Click on any of the images to see lightGallery</span>
    </div>
  </div>
