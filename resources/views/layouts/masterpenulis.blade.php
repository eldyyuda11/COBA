<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
      integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY="
      crossorigin="anonymous"
    />
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light top-nav shadow-sm bg-white rounded sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cerita rakyat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Mega Menu
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}
        </ul>
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li>
            {{-- <form class="d-flex">
              <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
          </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle p-0 "
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                style="display: flex; align-items: center;"
              >
                <i class="material-icons icon">
                  person
                </i>
                <span class="text">Account</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="navbarDropdown">
                <form action="{{route('logoutpenulis')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-dropdown-item">Log Out</button>
                </form>

                <div class="dropdown-divider"></div>

              </div>
            </li>
          </ul>
          </div>
      </div>
    </div>
  </nav>
  <!-- navbar end -->
  <!-- vertical navbar start -->

  <div class="wrapper d-flex shadow-sm bg-white rounded">
    <div class="sideMenu shadow-sm">
      <div class="sidebar">
        <ul class="navbar-nav side-nav">
          <li class="nav-item mb-1 p-4 shadow-sm rounded">
            <div class="btn-group dropright">
              <button type="button" class="btn">
                <a href="#" class="nav-link px-2">
                  <i class="material-icons icon">
                    dashboard
                  </i>
                  <span class="text">Dashboard</span>
                </a>
              </button>
              <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropright</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </li>

          <li class="nav-item mb-1 p-4 shadow-sm rounded">
            <div class="btn-group dropright">
              <button type="button" class="btn">
                <a href="#" class="nav-link px-2">
                  <i class="material-icons icon">
                    book
                  </i>
                  <span class="text">Accounting Voucher</span>
                </a>
              </button>
              <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropright</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </li>

          <li class="nav-item mb-1 p-4 shadow-sm rounded">
            <div class="btn-group dropright">
              <button type="button" class="btn">
                <a href="#" class="nav-link px-2">
                  <i class="material-icons icon">
                    dns
                  </i>
                  <span class="text">Inventory</span>
                </a>
              </button>
              <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropright</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </li>

          <li class="nav-item mb-1 p-4 shadow-sm rounded">
            <div class="btn-group dropright">
              <button type="button" class="btn">
                <a href="#" class="nav-link px-2">
                  <i class="material-icons icon">
                    pages
                  </i>
                  <span class="text">Other Reports</span>
                </a>
              </button>
              <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropright</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </li>

          <li class="nav-item mb-1 p-4 shadow-sm rounded">
            <div class="btn-group dropright">
              <button type="button" class="btn">
                <a href="#" class="nav-link px-2">
                  <i class="material-icons icon">
                    computer
                  </i>
                  <span class="text">GST Reports</span>
                </a>
              </button>
              <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropright</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </li>

          <li class="nav-item mb-1 p-4 shadow-sm rounded">
            <div class="btn-group dropright">
              <button type="button" class="btn">
                <a href="#" class="nav-link px-2">
                  <i class="material-icons icon">
                    view_list
                  </i>
                  <span class="text">Others</span>
                </a>
              </button>
              <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropright</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </div>
  <!-- vertical navbar end -->

  <!-- content -->
        @yield('content')
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"
      integrity="sha256-qE/6vdSYzQu9lgosKxhFplETvWvqAAlmAuR+yPh/0SI="
      crossorigin="anonymous">
    </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </body>
</html>
