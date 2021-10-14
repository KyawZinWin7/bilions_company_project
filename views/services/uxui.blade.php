@extends('layout.master')


@section('body')
  <!-- mobile UI section start -->
  <div class="ser_detail mt-4">
    <div class="container">
      <div class="ux-icon">
        <a href="/">
          <i class="fal fa-arrow-square-left"></i>
        </a>
        <span> Explore </span>

      </div>

      @include('layout.gallery_nav')

      <div class="mobile-ui mt-4">
        <div>
          <h5>Mobile UI </h5>
        </div>
        <div class="row">

          <!-- ============== start main ============ -->
          @foreach ($mobile_ui_images as $image)
            <div class="col-lg-3 col-md-6">
              <div class="mobileux-img">
                <a id="my-modal" class="my-modal-{{ $image['id'] }}" data-toggle="modal"
                  data-target="#myModal{{ $image['id'] }}">
                  <img src="{{ $image['img']['image_1'] }}" class="img-fluid" alt="">
                </a>
                <div class="mobileux-title">
                  <h4>{{ $image['title'] }}</h4>
                </div>
              </div>
            </div>
          @endforeach
          <!-- ============== end main ============ -->

          @foreach ($mobile_ui_images as $image)
            <!-- ============Start Service Detail Images LightBox=========== -->
            <div class="modal fade" id="myModal{{ $image['id'] }}" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content ">
                  <a class="image-close" data-dismiss="modal"><i class="fal fa-times"></i></a>
                  <h4 class="ml-5 text-white"> UX/UI Design </h4>
                  <h4 class="ml-5 lightbox-title text-white">{{ $image['title'] }}</h4>


                  <div class="modal-body text-center">
                    <div class="move-img">
                      <a class="prev" onclick="plusSlides(-1, '{{ $image['id'] }}')"><i
                          class="fal fa-chevron-left"></i></a>
                      <a class="next" onclick="plusSlides(1, '{{ $image['id'] }}')"><i
                          class="fal fa-chevron-right"></i></a>
                    </div>

                    <!-- ============== start main slides ============ -->
                    <div class="myslids myslides{{ $image['id'] }}">
                      <img src="{{ $image['img']['image_1'] }}" class="img-fluid main-img" alt="">
                    </div>

                    @for ($i = 2; $i <= count($image['img']); $i++)

                      <div class="myslide myslides{{ $image['id'] }}">
                        <img src="{{ $image['img']['image_' . $i] }}" class="img-fluid main-img" alt="">
                      </div>
                    @endfor
                    <!-- ============== end main slides ============ -->

                    <div class="img-list mt-4">

                      <!-- ============== start demo ============ -->
                      @for ($i = 1; $i <= count($image['img']); $i++)
                        <img src="{{ $image['img']['image_' . $i] }}" class="img-fluid demo demo{{ $image['id'] }}"
                          onclick="currentSlide({{ $i }}, '{{ $image['id'] }}')" alt="">
                      @endfor
                      <!-- ============== end demo ============ -->

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
        </div>
        <!-- ============End Service Detail Images LightBox=========== -->
        @endforeach
      </div>
    </div>
  </div>
  </div>
  <!-- mobile UI section end -->

  <!-- website UI section start -->
  <div class="ser_detail mt-5">
    <div class="container">
      <div class="mobile-ui mt-4">
        <div>
          <h5 style="color: white">Website UI </h5>
        </div>
        <div class="row">

          <!-- ============== start main ============ -->
          @foreach ($web_ui_images as $image)
            <div class="col-lg-3 col-md-6">
              <div class="mobileux-img">
                <a id="my-modal" class="my-modal-{{ $image['id'] }}" data-toggle="modal"
                  data-target="#myModal{{ $image['id'] }}">
                  <img src="{{ $image['img']['image_1'] }}" class="img-fluid" alt="">
                </a>
                <div class="mobileux-title">
                  <h4 class="text-white">{{ $image['title'] }}</h4>
                </div>
              </div>
            </div>
          @endforeach
          <!-- ============== end main ============ -->

          @foreach ($web_ui_images as $image)
            <!-- ============Start Service Detail Images LightBox=========== -->
            <div class="modal fade" id="myModal{{ $image['id'] }}" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content ">
                  <a class="image-close" data-dismiss="modal"><i class="fal fa-times"></i></a>
                  <h4 class="ml-5 text-white"> UX/UI Design </h4>
                  <h4 class="ml-5 text-white lightbox-title ">{{ $image['title'] }}</h4>


                  <div class="modal-body text-center">
                    <div class="move-img">
                      <a class="prev" onclick="plusSlides(-1, '{{ $image['id'] }}')"><i
                          class="fal fa-chevron-left"></i></a>
                      <a class="next" onclick="plusSlides(1, '{{ $image['id'] }}')"><i
                          class="fal fa-chevron-right"></i></a>
                    </div>

                    <!-- ============== start main slide image ============ -->
                    <div class="myslids myslides{{ $image['id'] }}">
                      <img src="{{ $image['img']['image_1'] }}" class="img-fluid main-img" alt="">
                    </div>


                    @for ($i = 2; $i <= count($image['img']); $i++)
                      <div class="myslide myslides{{ $image['id'] }}">
                        <img src="{{ $image['img']['image_' . $i] }}" class="img-fluid main-img" alt="">
                      </div>
                    @endfor
                    <!-- ============== end main slide image ============ -->

                    <div class="img-list mt-4">

                      <!-- ============== start demo image ============ -->
                      @for ($i = 1; $i <= count($image['img']); $i++)
                        <img src="{{ $image['img']['image_' . $i] }}" class="img-fluid demo demo{{ $image['id'] }}"
                          onclick="currentSlide({{ $i }}, '{{ $image['id'] }}')" alt="">
                      @endfor
                      <!-- ============== end demo image ============ -->

                      <!-- ============== start dots image ============ -->
                      <div class="mt-3">
                        @for ($i = 1; $i <= count($image['img']); $i++)
                          <span class="demo dot dot{{ $image['id'] }}"
                            onclick="currentSlide({{ $i }}, '{{ $image['id'] }}')"></span>
                        @endfor
                        <!-- ============== end dots image ============ -->
                      </div>
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
  <!-- website UI section end -->

  <!-- wireframe section start -->
  <div class="ser_detail mt-5">
    <div class="container">
      <div class="mobile-ui mt-4">
        <div>
          <h5 style="color: white">Wireframe</h5>
        </div>
        <div class="row">

          <!-- ============== start main ============ -->
          @foreach ($wire_frame_images as $image)
            <div class="col-lg-3 col-md-6">
              <div class="mobileux-img">
                <a id="my-modal" class="my-modal-{{ $image['id'] }}" data-toggle="modal"
                  data-target="#myModal{{ $image['id'] }}">
                  <img src="{{ $image['img']['image_1'] }}" class="img-fluid" alt="">
                </a>
                <div class="mobileux-title">
                  <h5 style="margin-top: -2px">{{ $image['title'] }}</h5>
                </div>
              </div>
            </div>
          @endforeach
          <!-- ============== end main ============ -->

          @foreach ($wire_frame_images as $image)
            <!-- ============Start Service Detail Images LightBox=========== -->
            <div class="modal fade" id="myModal{{ $image['id'] }}" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content ">
                  <a class="image-close" data-dismiss="modal"><i class="fal fa-times"></i></a>
                  <h4 class="ml-5 text-white"> UX/UI Design </h4>
                  <h4 class="ml-5 lightbox-title text-white">{{ $image['title'] }}</h4>


                  <div class="modal-body text-center">
                    <div class="move-img">
                      <a class="prev" onclick="plusSlides(-1, '{{ $image['id'] }}')"><i
                          class="fal fa-chevron-left"></i></a>
                      <a class="next" onclick="plusSlides(1, '{{ $image['id'] }}')"><i
                          class="fal fa-chevron-right"></i></a>
                    </div>

                    <!-- ============== start main slides ============ -->
                    <div class="myslids myslides{{ $image['id'] }}">
                      <img src="{{ $image['img']['image_1'] }}" class="img-fluid main-img" alt="">
                    </div>

                    @for ($i = 2; $i <= count($image['img']); $i++)

                      <div class="myslide myslides{{ $image['id'] }}">
                        <img src="{{ $image['img']['image_' . $i] }}" class="img-fluid main-img" alt="">
                      </div>
                    @endfor
                    <!-- ============== end main slides ============ -->
                    <div class="img-list mt-4">
                      <!-- ============== start demo ============ -->
                      @for ($i = 1; $i <= count($image['img']); $i++)
                        <img src="{{ $image['img']['image_' . $i] }}" class="img-fluid demo demo{{ $image['id'] }}"
                          onclick="currentSlide({{ $i }}, '{{ $image['id'] }}')" alt="">
                      @endfor
                      <!-- ============== end demo ============ -->

                      <div class="mt-3">
                        <!-- ============== start dots ============ -->
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
        </div>
        <!-- ============End Service Detail Images LightBox=========== -->
        @endforeach
      </div>
    </div>
  </div>
  </div>
  <!-- wireframe section end -->
@endsection
