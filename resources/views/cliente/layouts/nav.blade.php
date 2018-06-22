<nav class="navbar navbar-default navbar-fixed-top" style="background-color: rgb(77,99,111); padding-top: 0px;">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="background-color: rgb(58,75,83); color: #fff;"><span class="fa fa-quora" aria-hidden="true"></span>uetzalEdu</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#" style="color: #fff;"><span class="glyphicon glyphicon-globe"></span></a></li>
              <li><a href="#" style="color: #fff;"><span class="glyphicon glyphicon-user"></span></a></li>
              <li><a href="#" style="color: #fff;"><span class="glyphicon glyphicon-envelope"></span></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
                    <span class="fa fa-bell"></span></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><!-- <img src="{{asset(Auth::user()->avatar)}}" style="height:23px;width:23px" class="img-responsive"> -->
                <img src="{{ asset('/img/avatar2.png')}}" style="height:23px;width:23px" class="img-responsive img-circle">
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span> 
                      {{ __('Salir') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>