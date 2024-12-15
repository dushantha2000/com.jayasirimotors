<!-- besic section strats -->
@include('home.besic');
<!-- end besic section -->

 <!-- header section strats -->
 @include('home.header');
 <!-- end header section -->

 
<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>service</span>
               </h2>
            </div>
            <div class="row">

               @foreach($services as $service)

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           
                           <a href="" class="option2">
                           Book Online
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="service/{{$services->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$services->service_name}}
                        </h5>
                        <h6 style="color:red;">
                           {{$services->Hours}}
                        </h6>
                     </div>
                  </div>
               </div>

               @endforeach
















































               <!--<div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/image1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           #####
                        </h5>
                        <h6>
                           #####
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           hours
                           </a>
                           <a href="" class="option2">
                           book online
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/image1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                            hours
                        </h5>
                        <h6>
                           book online
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           hours
                           </a>
                           <a href="" class="option2">
                           book online
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/image1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           hours
                        </h5>
                        <h6>
                           book online
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           hours
                           </a>
                           <a href="" class="option2">
                           book online
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/image1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           hours
                        </h5>
                        <h6>
                          book online
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           hours
                           </a>
                           <a href="" class="option2">
                           book online
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/image1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           hours
                        </h5>
                        <h6>
                           book online
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           hours
                           </a>
                           <a href="" class="option2">
                           book online
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/image1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           hours
                        </h5>
                        <h6>
                           book online
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           hours
                           </a>
                           <a href="" class="option2">
                           book online
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/image1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           hours
                        </h5>
                        <h6>
                           book online
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           hours
                           </a>
                           <a href="" class="option2">
                           book online
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/image1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           hours
                        </h5>
                        <h6>
                           book online
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           hours
                           </a>
                           <a href="" class="option2">
                           book online
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/image1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           hours
                        </h5>
                        <h6>
                           book online
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           hours
                           </a>
                           <a href="" class="option2">
                           book online
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/image1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           hours
                        </h5>
                        <h6>
                           book online
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           hours
                           </a>
                           <a href="" class="option2">
                           book online
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/image1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           hours
                        </h5>
                        <h6>
                           book online
                        </h6>
                     </div>
                  </div>
               </div>
            </div> 
            <div class="btn-box">
               <a href="">
               View All Service
               </a>
            </div>-->
         </div>
      </section>







<!-- footer start -->
@include('home.footer');
<!-- footer end -->

<!-- end part -->
@include('home.endpart');


