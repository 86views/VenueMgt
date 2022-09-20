@extends('layouts.front')

@section('content')
<div class="site-blocks-cover overlay" style="background-image: url({{ $venue->getFirstMediaUrl('main_photo') }});" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-10">
          <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">{{ $venue->name }}</span>
          <h1 class="mb-2">625 S. Berendo St</h1>
          <p class="mb-5"><strong class="h2 text-success font-weight-bold">{{ $venue->price_per_hour }}</strong></p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section site-section-sm">
    <div class="container">
      <div class="row">
        <div class="col-lg-8" style="margin-top: -150px;">
          <div class="mb-5">
            <div class="slide-one-item home-slider owl-carousel">
              <div><img src="{{ $venue->getFirstMediaUrl('main_photo', 'big_thumb') }}" alt="{{ $venue->name }}" 
                ="img-fluid"></div>
              
            </div>
          </div>
          <div class="bg-white">
            <div class="row mb-5">
              <div class="col-md-6">
                <strong class="text-success h1 mb-3">${{ $venue->price_per_hour }}</strong>
              </div>
              
            </div>
            <div class="row mb-5">
              <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                <span class="d-inline-block text-black mb-0 caption-text">Event Type</span>
                <strong class="d-block">{{ implode(', ', $venue->event_types->pluck('name')->toArray()) }}</strong>
              </div>
              <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                <span class="d-inline-block text-black mb-0 caption-text">Location</span>
                <strong class="d-block">{{  $venue->location->name }}</strong>
              </div>
              <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                <span class="d-inline-block text-black mb-0 caption-text">People Amount</span>
                <strong class="d-block">{{ $venue->people_minimum }} - {{ $venue->people_maximum }}</strong>
              </div>
            </div>
            <h2 class="h4 text-black">More Info</h2>
            <p>{{ $venue->description }}</p>
            

            <div class="row mt-5">
              <div class="col-12">
                <h2 class="h4 text-black mb-3">Property Gallery</h2>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="images/img_1.jpg" class="image-popup gal-item"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="images/img_2.jpg" class="image-popup gal-item"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="images/img_3.jpg" class="image-popup gal-item"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="images/img_4.jpg" class="image-popup gal-item"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="images/img_5.jpg" class="image-popup gal-item"><img src="images/img_5.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="images/img_6.jpg" class="image-popup gal-item"><img src="images/img_6.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="images/img_7.jpg" class="image-popup gal-item"><img src="images/img_7.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="images/img_8.jpg" class="image-popup gal-item"><img src="images/img_8.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="images/img_1.jpg" class="image-popup gal-item"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="images/img_2.jpg" class="image-popup gal-item"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="images/img_3.jpg" class="image-popup gal-item"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="images/img_4.jpg" class="image-popup gal-item"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 pl-md-5">

          <div class="bg-white widget border rounded">

            <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
            <form action="" class="form-contact-agent">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
              </div>
            </form>
          </div>

          <div class="bg-white widget border rounded">
            <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
          </div>

        </div>
        
      </div>
    </div>
  </div>

  <div class="site-section site-section-sm bg-light">
    <div class="container">

      <div class="row">
        <div class="col-12">
          <div class="site-section-title mb-5">
            <h2>Related Properties</h2>
          </div>
        </div>
      </div>
    
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="property-details.html" class="prop-entry d-block">
            <figure>
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
                <span class="price rounded">$1,930,000</span>
                <h3 class="title">853 S Lucerne Blvd</h3>
                <p class="location">Los Angeles, CA 90005</p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
                    <span>Area:</span>
                    <strong>240m<sup>2</sup></strong>
                  </div>
                  <div class="col">
                    <span>Beds:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Baths:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Garages:</span>
                    <strong>1</strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="property-details.html" class="prop-entry d-block">
            <figure>
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
                <span class="price rounded">$2,438,000</span>
                <h3 class="title">853 S Lucerne Blvd</h3>
                <p class="location">Los Angeles, CA 90005</p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
                    <span>Area:</span>
                    <strong>240m<sup>2</sup></strong>
                  </div>
                  <div class="col">
                    <span>Beds:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Baths:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Garages:</span>
                    <strong>1</strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="property-details.html" class="prop-entry d-block">
            <figure>
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
                <span class="price rounded">$5,320,000</span>
                <h3 class="title">853 S Lucerne Blvd</h3>
                <p class="location">Los Angeles, CA 90005</p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
                    <span>Area:</span>
                    <strong>240m<sup>2</sup></strong>
                  </div>
                  <div class="col">
                    <span>Beds:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Baths:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Garages:</span>
                    <strong>1</strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
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