@include('layouts.layoutMain')


<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb-text">
               <h1 class="text-center">{{$detail->name}}</h1>
            </div>
         </div>
      </div>
   </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Course Details Area Start-->
<div class="course-details-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div class="course-details-content">
               <div class="single-course-details">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="overlay-effect">
                           <a href="#"><img alt="" src="{{ asset('template/img/details/1.jpg') }}"></a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="single-item-text">
                           <h4  style="min-height:100px;">{{$detail->name}}</h4>
                           <div class="single-item-text-info">
                              <span>By: <span>{{$detail->teacher}}</span></span>
                              <span>Date: <span>{{ date_format($detail->created_at, 'd-M-Y')}}</span></span>
                           </div>
                           <div class="course-text-content">
                              <p>{{$detail->description}}</p>
                           </div>
                           <div class="button-bottom">
                                 @if (!Auth::check())
                                    <a class="button-default" href="/login">Buy Now</a>
                                 @else
                                    <a class="button-default" href="/payment/{{$detail->id}}">Buy Now</a>
                                 @endif
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="course-duration">
                  <div class="duration-title">
                     {{--  <div class="text"><span>Lessons</span> <span class="text-right">Estimated Time</span></div>  --}}
                     <div class="text"><span>Lessons</span> <span class="text-right"></span></div>
                  </div>
                  {{--  <div class="duration-text">
                     <div class="text"><span>Print design</span> <span class="text-right">15 days</span></div>
                     <div class="text"><span>web design</span> <span class="text-right">10 days</span></div>
                     <div class="text"><span>apps design</span> <span class="text-right">16 days</span></div>
                     <div class="text"><span>web design</span> <span class="text-right">20 days</span></div>
                     <div class="text"><span>web design</span> <span class="text-right">22 days</span></div>
                  </div>  --}}
                  {{--  <video width="620" height="240" controls>
                        <source src="{{$videos[0]->link}}" type="video/mp4">
                  </video>  --}}

                  <iframe width="100%" height="315" src="{{$videos[0]->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  <br />

                  <div class="duration-text">
                     @foreach($videos as $key => $item)
                        <div class="text"><span>{{$item->title}}</span> <span class="text-right"></span></div>
                     @endforeach

                  </div>

               </div>
               <div class="comments">
                  <h4 class="title">Comments</h4>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="sidebar-widget">
               <div class="single-sidebar-widget">
                  <div class="tution-wrapper">
                     <div class="tution-fee">
                        <h1>${{$detail->price}}</h1>
                     </div>
                     <div class="tutor-image">
                        <img src="{{ asset('template/img/teacher/none.png') }}" alt="">
                     </div>
                     <div class="single-teacher-text">
                        <h3><a href="#">{{$detail->teacher}}</a></h3>
                        <h4>Teacher</h4>
                        <div class="social-links">
                           <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                           <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                           <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                           <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--End of Course Details Area-->

@include('layouts.layoutMainFooter')
