@extends('layouts.front')



@section('content')
<div class="slide-one-item home-slider owl-carousel">
        @foreach ($featuredVenues as  $features)
          
       
    <div class="site-blocks-cover" style="background-image: url('{{ $features->getFirstMediaUrl('main_photo') }}');" data-aos="fade" data-stellar-background-ratio="0.5">

      <div class="text">
        <h2>{{ $features->name }}</h2>
        <p class="location"><span class="property-icon icon-room"></span>{{ $features->address }}</p>
        <p class="mb-2"><strong>{{ number_format($features->price_per_hour ) }}</strong></p>
        
        
        <p class="mb-0"><a href="{{ route('venues.show', [$features->slug, $features->id]) }}" 
          class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>
        
      </div>
    </div>  

    
    @endforeach
  </div>

  <div class="py-5">
    <div class="container">

      <form class="row mb-5" action="{{ route('search') }}" method="GET">
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="select-wrap">
            <span class="icon icon-arrow_drop_down"></span>
            <select name="event_types" id="venue_types" class="form-control d-block rounded-0">
              <option value=""> Select Event Type</option>
                @foreach ($eventTypes as $eventType)
                 <option value="{{ $eventType->id }}">{{ $eventType->name  }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="select-wrap">
            <span class="icon icon-arrow_drop_down"></span>
            <input type="number" name="people_amount" id="people_amount" 
            class="form-control d-block rounded-0" min="0" max="100" placeholder="People Amount"> 
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="select-wrap">
            <span class="icon icon-arrow_drop_down"></span>
            <select name="location" id="location" class="form-control d-block rounded-0">
              <option value=""> Select Location</option>
               @foreach ($locations as $location)
               <option value="{{ $location->id }}">{{ $location->name }}</option>
               @endforeach
              
            </select>
          </div>
        </div>
         <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Search">
        </div>
        
      </form>
      
          <div class="row justify-content-center">
            <div class="col-md-7 text-center mb-5">
              <div class="site-section-title">
                <h2> Inspiring Venues .......</h2>
              </div>
            </div>
          </div>
    
          <div class="row">
            @foreach ($eventTypes as $eventType)
            <div class="col-md-6 col-lg-4 mb-4">
              <a href="{{ route('event-type', $eventType->slug) }}" class="service text-center border rounded">
                <span class="icon flaticon-house"></span>
                <h2 class="service-heading">{{ $eventType->name }}</h2>
                <p><span class="read-more">Learn More</span></p>
              </a>
            </div>
            
            @endforeach
          </div>
    </div>
  <div class="site-section site-section-sm bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <div class="site-section-title">
            <h2>New Venue for You</h2>
          </div>
        </div>
      </div>   
      <div class="row mb-5">
          @foreach ($newestVenue as $venue)     
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="property-details.html" class="prop-entry d-block">
            <figure>
             
              <img src="{{ $venue->getFirstMediaUrl('main_photo', 'big_thumb') }}" alt="{{ $venue->name }}" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
                <span class="price rounded">${{ $venue->price_per_hour }}</span>
                <h3 class="title">{{ $venue->name }}</h3>
                <p class="location">{{ $venue->address }}</p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
                    <span>Event Types:</span>
                    <strong>{{ implode(', ', $venue->event_types->pluck('name')->toArray()) }}</strong>
                  </div>
                  <div class="col">
                    <span>Number of people:</span>
                    <strong>{{ $venue->people_minimum }} - {{ $venue->people_maximum }}</strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        @endforeach
        
      </div>
      {{-- <div class="row">
        <div class="col-md-12 text-center">
          <div class="site-pagination">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <span>...</span>
            <a href="#">10</a>
          </div>
        </div>  
      </div> --}}
      
    </div>
  </div>
  
  {{-- <div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <div class="site-section-title">
            <h2>Our Blog</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
           
          <a href="#"><img src="{{ asset('images/img_4.jpg') }}" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
             
          <a href="#"><img src="{{ asset('images/img_2.jpg') }}" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
             
          <a href="#"><img src="{{ asset('images/img_3.jpg') }}" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
          </div>
        </div>

      </div>

    </div>
  </div> --}}

  
  <div class="site-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-7">
        <div class="site-section-title text-center">
          <h2>Discover Spaces ...</h2>
        </div>
      </div>
    </div>
    <div class="row block-13">

      <div class="nonloop-block-13 owl-carousel">
        @foreach  ($locations as $location)
               
        <div class="slide-item">
          <div class="team-member text-center">
            <a href="{{ route('location', $location->slug) }}">
            <img class="img-fluid mb-4 w-50 rounded-circle mx-auto"
              src="{{ $location->getFirstMediaUrl('photo') }}" alt="{{ $location->name }}">
            </a>
            <div class="text p-3">
              <a href="{{ route('location', $location->slug) }}">
              <h2 class="mb-2 font-weight-light text-black h4"> {{ $location->name }}</h2>
              </a>
            </div>
          </div>
        </div>
          @endforeach
          
         </div>

      </div>
    </div>
  </div>

  <div class="site-section site-section-sm bg-primary">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h2 class="text-white">Wide Range of Properties Just For You</h2>
          <p class="lead text-white-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-md-4 text-center">
          <a href="#" class="btn btn-outline-primary btn-block py-3 btn-lg">See Properties</a>
        </div>
      </div>
    </div>
  </div>
    


@endsection