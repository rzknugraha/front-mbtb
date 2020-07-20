
@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="/assets/events.css" />
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

    <section class="main-events">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="events-tag">
              FOOM <span>Talks #1</span>
            </h1>

            <h2 class="events-theme">
              Sharing Session
            </h2>
            <h2 class="events-title">
              From Employee <span>to</span> Businessman
            </h2>

            <h3 class="events-detail">
              March,14 2020 / 3PM - 6PM <br />
              South Quarter Tower C Floor 10 <br />
              Jl. R.A. Kartini Kav. 8 <br />
              TB Simatupang Cilandak, Jaksel
            </h3>

            <a href="#" class="btn btn-primary">JOIN EVENT</a>
          </div>

          <div class="col-md-4">
            <div class="events-person">
              <img src="/assets/images/Ansari Kadir.png" alt="Ansari Kadir">
              <div class="events-person-box">
                <h3 class="events-person-name">
                  Ansari Kadir
                </h3>
                <h4 class="events-person-job">
                  Chief Marketing Officer HEBAT
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-all-events">
      <div class="container">
        <div class="card-box">

            @foreach ($getEvent as $i)
          <div class="card-box-item">
            <img src="{{env('IMAGE_URL').$i->image_front}}" />
            <a href="#">
              <div class="text">
                <h4>
                  {{$i->title}}
                </h4>
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
