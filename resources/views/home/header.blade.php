<body bgcolor="">
      <div class="hero_area">
          <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="250" src="images/logo1.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">

                        <li class="nav-item active">
                           <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                        </li>



                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('about.page') }}">About<span class="sr-only">(current)</span></a>
                        </li>



                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('service.page') }}">Service<span class="sr-only">(current)</span></a>
                        </li>



                        <!--<li class="nav-item">
                           <a class="nav-link" href="blog_list.html">Blog</a>
                        </li>-->
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact<span class="sr-only">(current)</span></a>
                        </li>

                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                        
                           
                           </button>
                        </form>

                         @if (Route::has('login'))

                         @auth
                         <li class="nav-item">
                           <x-app-layout>
    
                           </x-app-layout>

                           @else

                        
                        <li class="nav-item">
                           <a class="btn btn-primary" href="{{ route('login') }}">Login</a> <span> </span>

                        </li>
                        <li class=" nav-item">
                           <a class="btn btn-success" id="login-btn" href="{{ route('register') }}">Register</a>
                        </li>

                        <li class=" nav-item">
                           <a class="btn btn-danger" id="login-btn" href="{{ route('company_register') }}">Company</a>
                        </li>


                        @endauth

                        @endif
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>