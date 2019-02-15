@include('layouts.layoutMain')


<!--Course Area Start-->
<div class="course-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title" >
                        <h3 style="margin-top: 15px !important;">POPULAR COURSES</h3>
                        <p>All couses are available in English course.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach( $courses as $key => $item)
                <div class="col-md-4 col-sm-6">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="#"><img src="img/course/1.jpg" alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="#">{{$item->name}}</a></h4>
                            <div class="single-item-text-info">
                                <span>By: <span>{{ $item->teacher}}</span></span>
                                <span>Date: <span>{{ date_format($item->created_at, 'd-M-Y')}}</span></span>
                            </div>
                            <p>{{$item->description}}</p>
                            <div class="single-item-content">
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-face"></i>{{$numOfUserRegister[$key]}} students</span>
                                </div>
                                <div class="single-item-rating">
                                    {{$ratings[$key]}}

                                    @if ($ratings[$key] == 0)
                                        star
                                    @elseif ($ratings[$key] < 0.5)
                                        star
                                    @elseif ($ratings[$key] < 1)
                                        <i class="zmdi zmdi-star-half"></i>
                                    @elseif ($ratings[$key] < 1.5)
                                        <i class="zmdi zmdi-star"></i>
                                    @elseif ($ratings[$key] < 2)
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    @elseif ($ratings[$key] < 2.5)
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    @elseif ($ratings[$key] < 3)
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    @elseif ($ratings[$key] < 3.5)
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    @elseif ($ratings[$key] < 4)
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    @elseif ($ratings[$key] < 4.5)
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    @elseif ($ratings[$key] < 5)
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    @else ($ratings[$key] < 5)
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    @endif

                                </div>
                            </div>   
                        </div>
                        <div class="button-bottom">
                            <a href="/course/{{$item->id}}" class="button-default">Buy Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
          
            {{--  <div class="col-md-12 col-sm-12 text-center">
                <a href="#" class="button-default button-large">Browse All Courses <i class="zmdi zmdi-chevron-right"></i></a>
            </div>  --}}
        </div>
    </div>
</div>
<!--End of Course Area-->

@include('layouts.layoutMainFooter')
