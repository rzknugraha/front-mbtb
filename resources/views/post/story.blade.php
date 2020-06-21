@extends('layouts.app')

@section('content')

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

      <section class="second">
        <div class="container">
          <div>
            <div class="left">
              <h2>Be Brave <br />Be Free</h2>
              <h3>#bebastanpabatas</h3>
              <div class="desc">
                <p>
                  We encourage people to step out the boundaries to achieve
                  dreams. Everyone have unique story, we belive yours too. Share
                  your story to inspire others.
                </p>
                <a href="#">Submit Your Story ></a>
              </div>
            </div>

            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
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

      <section class="fourth">
        <!-- <div class="container">
          <div></div>
        </div> -->
        <a href="#" class="banner">
          <img src="/assets/images/Next_Event_Foom Talks.png" />
        </a>
      </section>

      <section class="slider-section fifth">
        <div class="container">
          <div>
            <h2>Foomunity Events</h2>
            <div class="slider-wrapper">
              <img
                class="prev"
                src="/assets/images/button_left-green.png"
                onclick="onSlide(1, 0)"
              />
              <img
                class="next"
                src="/assets/images/button_right-green.png"
                onclick="onSlide(1, 1)"
              />

              <div class="slider-content">
                  @foreach ($getEvent as $gE)
              <div class="slider-item slider-{{$loop->iteration}}">
                  <img src="{{env('IMAGE_URL').$gE->image_front}}" />
                  <a href="#">
                    <div class="text">
                      <h4>
                        {{$gE->title}}
                      </h4>
                      <span>Read More ></span>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>

            <a href="#" class="btn-tosca">See All Events</a>
          </div>
        </div>
      </section>

      <section class="sixth">
        <div class="gradient-layer"></div>
        <div class="container">
          <div>
            <h1>Are You Ready<br />To Join Foomunity?</h1>
            <div>
              <a href="#" class="btn-tosca">
                Sign Me Up
              </a>
            </div>
          </div>
        </div>
      </section>

      <script src="/assets/slider.js"></script>
    </body>
  </html>

@endsection
