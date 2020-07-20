@extends('layouts.app')

@section('content')

<header class="header-dark">
    <div class="container">
      <div>
        <nav>
          <a href="/home">
            Home
          </a>
          <a href="/story">
              Stories
            </a>
            <a href="/event">
            Events
          </a>
        </nav>
        <a href="#modal-login" id="btn-login" class="modal-trigger">
          Login
        </a>
      </div>
    </div>
  </header>

    <section class="first">
        <div class="gradient-layer"></div>
        <div class="container">
          <div>
            <img src="/assets/images/first.png" />
            <div class="caption">
              <h1>Siapa Bilang <br />Main Game Itu <br />Gak Produktif?</h1>
              <a href="#" class="btn-tosca">See Full Story</a>
            </div>
          </div>
        </div>
      </section>

      <section class="third">
        <div class="container">
          <div>
            <br>
          <h2 style="color:black">{{$detailStory->short_description}}</h2>
                <h4>{{$detailStory->title}}</h4>

            </div>
            <div class="post-body">
                {!!$detailStory->body!!}
            </div>
            <div>
                <table>
                    <tr>

                    </tr>
                </table>
            </div>
          </div>
        </div>
      </section>

      <section class="slider-section third">
        <div class="container">
          <div>
            <h2>Their Story</h2>
            <div class="slider-wrapper">
              <img
                class="prev"
                src="/assets/images/button_left.png"
                onclick="onSlide(0, 0)"
              />
              <img
                class="next"
                src="/assets/images/button_right.png"
                onclick="onSlide(0, 1)"
              />

              <div class="slider-content">
                  @foreach ($getStory as $gS)
              <div class="slider-item slider-{{$loop->iteration}}">
                <img src="{{env('IMAGE_URL').$gS->image_front}}" />
                  <a href="#">
                    <div class="text">
                      <h4>
                        {{$gS->title}}
                      </h4>
                      <p>{{$gS->short_description}}</p>
                      <span>Read More ></span>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>

            <a href="#" class="btn-tosca">See All Stories</a>
          </div>
        </div>
      </section>

      <script src="/assets/slider.js"></script>
    </body>
  </html>

@endsection
