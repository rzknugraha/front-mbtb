
@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="/assets/stories.css" />


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

<section class="section-stories-title">
    <div class="container">
      <h2>
        STORIES FROM THE BRAVE AND FREE <br />
        #BEBASTANPABATAS
      </h2>
    </div>
  </section>

  <section class="section-card-box-item">
    <div class="container">
      <div class="card-box">

        @foreach ($getStory as $i)
        <div class="card-box-item">
          <img src="{{env('IMAGE_URL').$i->image_front}}" />

          <a href="#">
            <div class="text">
              <h4>
                {{$i->title}}
              </h4>
              <p>{{$i->short_description}}</p>
              <span>Read More ></span>
            </div>
          </a>
        </div>

        @endforeach

        <button type="button" class="btn btn-tosca btn-load-more">Load More</button>
      </div>
    </div>
  </section>
</body>
</html>

@endsection
