
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

    <style type="text/css">
      
      label
      {
        display: inline-block;

        width: 200px;
      }


    </style>

    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          
          <img src="admin/assets/images/logo12.png" width="230" height="0" alt="logo" />
          
          
          
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">

                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>

                    <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('doctorshow')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Doctor Appointment</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('videoadmin')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Meeting</span>
            </a>
          </li>





        </ul>
      </nav>
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->




        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">

                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

 
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview')}}"><h5>{{$doctorname1->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor1}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src="doctorimage/{{$doctorname1->image}}"></i>
                  
                      </div>
                    </div>
                  </div>
                </div>
              </div> 

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview1')}}"><h5>{{$doctorname2->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor2}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname2->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview2')}}"><h5>{{$doctorname3->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor3}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname3->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview3')}}"><h5>{{$doctorname4->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor4}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname4->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview4')}}"><h5>{{$doctorname5->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor5}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname5->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview5')}}"><h5>{{$doctorname6->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor6}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname6->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview6')}}"><h5>{{$doctorname7->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor7}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname7->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview7')}}"><h5>{{$doctorname8->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor8}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname8->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview8')}}"><h5>{{$doctorname9->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor9}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname9->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview9')}}"><h5>{{$doctorname10->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor10}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname10->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview10')}}"><h5>{{$doctorname11->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor11}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname11->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview11')}}"><h5>{{$doctorname12->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor12}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname12->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview12')}}"><h5>{{$doctorname13->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor13}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname13->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview13')}}"><h5>{{$doctorname14->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor14}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname14->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview14')}}"><h5>{{$doctorname15->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor15}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname15->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview15')}}"><h5>{{$doctorname16->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor16}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname16->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview16')}}"><h5>{{$doctorname17->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor17}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname17->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview17')}}"><h5>{{$doctorname18->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor18}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname18->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview18')}}"><h5>{{$doctorname19->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor19}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname19->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview19')}}"><h5>{{$doctorname20->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor20}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname20->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview20')}}"><h5>{{$doctorname21->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor21}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname21->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview21')}}"><h5>{{$doctorname22->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor22}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname22->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview22')}}"><h5>{{$doctorname23->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor23}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname23->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview23')}}"><h5>{{$doctorname24->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor24}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname24->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview24')}}"><h5>{{$doctorname25->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor25}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname25->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointvie25')}}"><h5>{{$doctorname26->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor26}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname26->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview26')}}"><h5>{{$doctorname27->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor27}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname27->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview27')}}"><h5>{{$doctorname28->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor28}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname28->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview28')}}"><h5>{{$doctorname29->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor29}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname29->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a href="{{url('adocappointview29')}}"><h5>{{$doctorname30->name}}</h5></a>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$doctor30}}</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class=""><img height="100" width="100"src=" doctorimage/{{$doctorname30->image}}"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              




 
            </div>



        <div class="container" align="center" style="padding: 100px">

          @if(session()->has('message'))

        <div class="alert alert-success">
          
          <button type="<button" class="close" data-dismiss="alert">
            
          </button>

          {{session()->get('message')}}


        </div>


        @endif
          
          


          </form>

        </div>

      </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
   		@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>