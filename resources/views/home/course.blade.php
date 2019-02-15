@include('layouts.layoutMain')


<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb-text">
               <h1 class="text-center">COURSES DETAILS</h1>
               <div class="breadcrumb-bar">
                  <ul class="breadcrumb">
                     <li><a href="#">Home</a></li>
                     <li>COURSES DETAILS</li>
                  </ul>
               </div>
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
                           <h4>Tên</h4>
                           <div class="single-item-text-info">
                              <span>By: <span>Salim Rana</span></span>
                              <span>Date: <span>20.5.15</span></span>
                           </div>
                           <div class="course-text-content">
                              <p>There are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some</p>
                              <p>but the mrity have suffered alteration in some orm, mora ekti fol ke bacabo herre many buthe mri have suffered alteration in</p>
                           </div>
                           <div class="single-item-content">
                              <div class="single-item-comment-view">
                                 <span><i class="zmdi zmdi-eye"></i>59</span>
                                 <span><i class="zmdi zmdi-comments"></i>19</span>
                              </div>
                              <div class="single-item-rating">
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star-half"></i>
                              </div>
                           </div>
                           <div class="button-bottom">
                              <a class="button-default" href="#">Buy Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="course-duration">
                  <div class="duration-title">
                     <div class="text"><span>Lessons</span> <span class="text-right">Estimated Time</span></div>
                  </div>
                  <div class="duration-text">
                     <div class="text"><span>Print design</span> <span class="text-right">15 days</span></div>
                     <div class="text"><span>web design</span> <span class="text-right">10 days</span></div>
                     <div class="text"><span>apps design</span> <span class="text-right">16 days</span></div>
                     <div class="text"><span>web design</span> <span class="text-right">20 days</span></div>
                     <div class="text"><span>web design</span> <span class="text-right">22 days</span></div>
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
                        <h1>$100</h1>
                     </div>
                     <div class="tutor-image">
                        <img src="{{ asset('template/img/teacher/5.jpg') }}" alt="">
                     </div>
                     <div class="single-teacher-text">
                        <h3><a href="#">Salim Rana</a></h3>
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
