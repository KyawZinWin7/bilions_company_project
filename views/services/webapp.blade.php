@extends('layout.master')

@section('body')

  <div class="ser_detail mt-4">
    <div class="container">
      <div class="webapp-icon">
        <a href="/">
          <i class="fal fa-arrow-square-left"></i>
        </a>
        <span> Explore </span>

      </div>
      @include('layout.gallery_nav')

      <div class="mobile-ui">
        <div class="row">

          <!-- ============== start main image ============ -->
          @foreach ($images as $image)
            <div class="col-lg-3 col-md-6 mt-4 ">
              <div class="mobileux-img">
                <a id="my-modal" class="my-modal-{{ $image['id'] }}" data-toggle="modal"
                  data-target="#myModal{{ $image['id'] }}">
                  <img src="{{ $image['img']['image_1'] }}" class="img-fluid" alt="">
                </a>
                <div class="mobileux-title">
                  <h4>{{ $image['title'] }} </h4>
                </div>
              </div>
            </div>
          @endforeach
          <!-- ============== end main image ============ -->

          @foreach ($images as $image)
            <!-- ============Start Service Detail Images LightBox=========== -->
            <div class="modal fade" id="myModal{{ $image['id'] }}" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content ">
                  <a class="image-close" data-dismiss="modal"><i class="fal fa-times"></i></a>
                  <h4 class="ml-5"> Web Application Development </h4>
                  <h4 class="ml-5 lightbox-title ">{{ $image['title'] }}</h4>


                  <div class="modal-body text-center">
                    <div class="move-img">
                      <a class="prev" onclick="plusSlides(-1, '{{ $image['id'] }}')"><i
                          class="fal fa-chevron-left"></i></a>
                      <a class="next" onclick="plusSlides(1, '{{ $image['id'] }}')"><i
                          class="fal fa-chevron-right"></i></a>
                    </div>

                    <!-- ============== start slides image ============ -->
                    <div class="myslids myslides{{ $image['id'] }}">
                      <img src="{{ $image['img']['image_1'] }}" class="img-fluid main-img" alt="">
                    </div>

                    @for ($i = 2; $i <= count($image['img']); $i++)
                      <div class="myslide myslides{{ $image['id'] }}">
                        <img src="{{ $image['img']['image_' . $i] }}" class="img-fluid main-img" alt="">
                      </div>
                    @endfor
                    <!-- ============== end slides image ============ -->

                    <!-- ============== start demo image ============ -->
                    <div class="img-list mt-4">
                      @for ($i = 1; $i <= count($image['img']); $i++)
                        <img src="{{ $image['img']['image_' . $i] }}" class="img-fluid demo demo{{ $image['id'] }}"
                          onclick="currentSlide({{ $i }}, '{{ $image['id'] }}')" alt="">
                      @endfor
                      <!-- ============== end demo image ============ -->

                      <!-- ============== start dots ============ -->
                      <div class="mt-3">
                        @for ($i = 1; $i <= count($image['img']); $i++)
                          <span class="demo dot dot{{ $image['id'] }}"
                            onclick="currentSlide({{ $i }}, '{{ $image['id'] }}')"></span>
                        @endfor
                        <!-- ============== end dots ============ -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============End Service Detail Images LightBox=========== -->
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
