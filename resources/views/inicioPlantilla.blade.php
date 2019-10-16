@extends('layouts.stark')
@section('content')
<header>
        <div class="container " >
          <div class="brand"> 
          <h1 class="brand_name"><img src="images/logomensajero.jpg" heigth=500></h1>
          </div>
          <div class="brand">
            <h1 class="brand_name"><a href="./"></a></h1>

          </div>
            
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class=""><a href="./">INICIO</a>
                </li>
                <li><a href="/log">INICIAR SESION</a>
                </li>
                
                 <li><a href="{{ route('admin.users.create') }}">Registrarse</a>
                </li>

                 <li><a href="/lognino" style="background-color: #7fcc39;" >Escribir carta</a>
                </li>
                <li><a href="#">CONTACTANOS</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <div class="container">

  <!-- Row -->
  <div class="row">

    <!-- Section header -->
    <div class="section-header text-center">
      <h2 class="title">BOLETIN Nro. 1</h2>
    </div>
    <!-- /Section header -->

    <!-- Work -->
    <div class="col-md-4 col-xs-6 work">
      <img class="img-responsive" src="./images/BOLETIN2.jpg" alt="">
      <div class="overlay"></div>
      <div class="work-content">
           <a class="lightbox" href="./images/BOLETIN3.jpg"><i class="fa fa-search"></i></a>
      </div>
      </div>
    </div>
    <!-- /Work -->

   


  </div>
  <!-- /Row -->

</div>
<!-- /Container -->

</div>

        
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      <footer>
        <section class="well3">
          <div class="container">
            <ul class="row contact-list">
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address>Av.Melchor Perez <br/> Nro 5043</address>
                  </div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="mailto:#">info@genesissoft.com</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-phone"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">76955744</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-fax"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">4446779</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-facebook"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Siguenos en Facebook</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Siguenos en Twitter</a></div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="copyright">GENESYS SOFT © <span id="copyright-year"></span>.&nbsp;&nbsp;<a href="index-5.html">Privacy Policy</a>More <a rel="nofollow" href="http://www.templatemonster.com/category.php?category=418&type=1" target="_blank"></a>
            </div>
          </div>
        </section>
      </footer>
    </div>
    <script src="{{asset('js/script.js')}}"></script>
@endsection