<!DOCTYPE html>
<html lang="en">
<head>

  <title>EU-CINEMA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



  <script src="{{ asset('js/genre.js') }}"></script>
 <script src="../public/js/genre.js"></script>




<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">EUROPEAN-CINEMA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

        <li class="search-block">
        <!-- search -->
        <!-- search -->
          <form class="search-el">
            <div class="input-group">

              <input type="text" class="form-control form-style"
              size="50" id="search"  >




              <div class="input-group-btn">

                <button type="button" class="btn btn-search">
                  <i class="fa fa-search"></i>
                </button>

              </div>

            </div>
          </form>

        <!-- search -->
        <!-- search -->
        </li>




        <li><a href="#films"> ФИЛЬМЫ </a></li>
        <li><a href="#genre"> ЖАНРЫ </a></li>
        <li><a href="#anounce"> АНОНСЫ </a></li>

        @if (Route::has('login'))

                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <li><a href="{{ route('login') }}">ВОЙТИ</a></li>

                    @if (Route::has('register'))

                    @endif
                @endauth

        @endif

      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center header-img" style="background-image: url('/img/movie.jpg');">

<p><h2 class="header-title">Cinema from all over Europe</h2></p>

</div>

<!-- MAIN CONTENT BEGIN -->
<!-- MAIN CONTENT BEGIN -->
<!-- MAIN CONTENT BEGIN -->
<div id="films" class="container-fluid text-center">

  <h2>ВСЕ ФИЛЬМЫ</h2>

  <br>
  <hr>
<div class="row  center-content" >


@foreach ($res  as $key =>  $items)

<div class="col-sm-4 ">

      <!-- one film begin -->
      <!-- one film begin -->
      <div class="row  one-film" >
      <!-- <div class="col-sm-7 one-film"> -->

      <div class="name-pos">
        <input type="hidden" name="" value="{{ $items->id }}">

        <h4 class="content-film-h4">{{ $items->filmname }}</h4>
      </div> <br>
      <span>&nbsp;</span>
      <table>
        <th>
      <td>
        <!-- small image -->
                <img class="img-main-small" src="img/{{ $items->img }}" alt="">
        <!-- small image -->
      </td>
      <td>
      <div class="content-film">
    <div class="block" >
          <b class="h5-pos">Страна: </b> <br>
        <h6 class="">
          {{ $items->country }}
        </h6>
    </div>
      <div class="block">
        <b class="h5-pos">Жанр: </b> <br>
        <h6 class="">
            {{ $items->genre }}
        </h6>
      </div>
      </div>
      <table class="content-bottom">
      <!-- button for one film -->
      <!-- button for one film -->
        <td>
          <div class="btn-cart-section">
            <tr>
              <td><b>Год :</b></td>
              <td>&nbsp;</td>
              <td>  {{ $items->year }} </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>

              <td><a  href="#" class="btn mary" data-toggle="modal"
                data-target="#{{ $items->id}}">more </a></td>
              <td>&nbsp;</td>

              <td>
                <a  href="{{ $items->url }}" target="_blank" class="btn btn-success btn-w">
                <b>Play  &nbsp;</b> <i class="fas fa-caret-right"></i> </a>
              </td>
            </tr>
          </div>
        </td>

      <!-- button for one film -->
      <!-- button for one film -->
      </table>
      </td>
        </th>
      </table>
  </div>
</div>


          <!-- MODAL BEGIN  -->
          <!-- The Modal -->
            <div class="modal fade" id="{{ $items->id}}">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <input type="hidden" name="" value="{{ $items->id }}">
                    <h3 class="modal-title " style="margin-top: 30px;">{{ $items->filmname }} [{{ $items->year }}]</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

          <!-- header modal begin-->
          <!-- header modal begin-->
                  <table class="table-align">
                    <tr>
                       <td rowspan="5">
                         <!-- small image -->
                                 <img class="img-main-small" src="img/{{ $items->img }}" alt="">
                         <!-- small image -->
                       
                        </td>
                    </tr>
          <!-- Актёры  -->
                     <tr>
                       <td>
                         <div class="modal-body"><b>Актёры :</b>
                           {{ $items->actors }}
                         </div> </td>
                    </tr>
          <!-- Актёры  -->
          <!-- Режиссер -->
                    <tr >
                       <td>
                         <div class="modal-body">
                           <b>Режиссер:</b>  {{ $items->director }}
                         </div> </td>
                    </tr>
          <!-- Режиссер -->
          <!-- Жанрs -->
                    <tr ><td>
                         <div class="modal-body"><b>Жанр:</b> {{ $items->genre }}
                         </div>
                    </td></tr>
          <!-- Жанрs -->
          <!-- Страна  -->
                    <tr><td>
                         <div class="modal-body"><b>Страна :</b> {{ $items->country }}
                         </div>
                    </td></tr>
          <!-- Страна  -->
          <!-- Длительность: -->
                    <tr >
                       <td><div class="modal-body"><b>Длительность:</b> {{ $items->las}}
                         </div></td>
                    </tr>
          <!-- Длительность: -->
                  </table>
          <!-- header modal end-->
          <!-- header modal end-->

            <!-- Modal body -->
            <div class="modal-body">
          <b>Описание : </b>
          {{ $items->description }}
            </div>
      <!-- play in modal -->
            <div class="modal-footer">
              <a  href="{{ $items->url }}" target="_blank" class="btn btn-success btn-w">
              <b>Play  &nbsp;</b> <i class="fas fa-caret-right"></i> </a>
            </div>
      <!-- play in modal -->
                </div>
              </div>
            </div>
          <!-- MODAL END  -->
          <!-- MODAL END  -->
      <!-- one film end -->
      <!-- one film end -->

@endforeach
<div class="col-sm-4 "></div>
    </div>
  </div>

<br>
<!-- pagination begin -->
<!-- pagination begin -->
  <div class="row" style="">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
          {{ $res->links() }}
    </div>
    <div class="col-sm-4"></div>
  </div>
<!-- pagination end -->
<!-- pagination end -->



</div>
<!-- MAIN CONTENT END -->
<!-- MAIN CONTENT END -->
<!-- MAIN CONTENT END -->


<!-- GENRE -->
<div id="genre" class="container-fluid text-center bg-grey " style="background-color: #E8E8E8;">

<br>
<br>

  <h2 >ЖАНРЫ</h2><br>
  <hr>

  <!-- Nav pills -->
  <ul class="nav nav-pills">


@foreach ( $genre as $item )
<li class="nav-item ">
  <a class="nav-link" data-toggle="pill" id=""
  href="#{{ $item->id }}">{{ $item->name }}</a>
</li>
@endforeach

  </ul>
  <br>

  <!-- Tab panes -->

  <div class="tab-content">


    <div class="genre-content tab-pane container active " id="{{ $item->id }}">

      <div id="films" class="container-fluid text-center">



<!-- GENRE CONTENT BEGIN -->
<!-- GENRE CONTENT BEGIN -->
<div class="row   position-cont">



  <hr>
  <br>


<div id="ajaxGenr">

</div>




</div>
<!-- GENRE CONTENT END -->
<!-- GENRE CONTENT END -->

      </div>
      <!-- MAIN CONTENT END -->
      <!-- MAIN CONTENT END -->
      <!-- MAIN CONTENT END -->

    </div>


  </div>

  <br>
  <br>
</div>

<!-- ANOUNCE SECTION -->
<!-- ANOUNCE SECTION -->


<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
    <div id="anounce" class="container-fluid">
      <br>
      <br>


      <div class="h1-anon">
        <h2 >АНОНСЫ</h2>

        <hr>
          <h2> Ближайшая премьера  </h2>
        <hr>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <h3>{{ $first->name }} </h3><br>

<table >
       <tr>
        <th>Дата:</th>
       </tr>

       <tr>
        <td>{{ $first->date }}</td>
       </tr>

       <tr>
        <td><b>Жанр:</b> </td>
       </tr>

       <tr>
        <td>{{ $first->genre }}</td>
       </tr>

       <tr>
        <td><b>Страна:</b></td>
       </tr>

       <tr>
        <td>{{ $first->country }}</td>
       </tr>
</table>

          <h3>Описание :</h3>
          {{ $first->des }}
          <br>


        </div>
        <div class="col-sm-1">

    <!-- film img 99.jpeg-->
    <!-- film img -->
<img class="" src="img/{{ $first->img }}" alt="">
    <!-- film img -->
    <!-- film img -->

        </div>
      </div>

  </div>
  <div class="col-sm-2"></div>

</div>
</div>

  <br>
  <br>
  <hr>

<!-- ANOUNCE SECTION -->
<!-- ANOUNCE SECTION -->





<!-- SLIDER ANOUNCE BEGIN -->
<!-- SLIDER ANOUNCE BEGIN -->
<div class="row">
  <div class="col-sm-1" ></div>
  <div class="col-sm-10" >

    <div id="anounce" class=" container-fluid ">

      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">



    <!-- one slide begin -->
    <!-- one slide begin -->
          <div class="item active">

            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-9">

              <div class="thumbnail">
                <table
                class="anounce-table" >
                    <tr>
                        <th></th>

                        <th rowspan="6">
                          <!-- film img -->
                          <div class="img-main-small" style="padding-left: 15px; width: 250px; height: 350px;">
                              <img class="" src="img/{{ $two->img }}" alt="">
                          </div>
                          <!-- film img -->
                        </th>
                    </tr>



                    <tr>
                        <td >
                          <div class="main-wd" >
                          </div>
                        </td>
                    </tr>
                  <tr>
                        <td>
                          <div class="">
                        <b>{{ $two->name }}  [{{ $two->date }}]</b>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <div class="">
                            <b>Описание:</b>
                            {{ $two->des }}
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="">
                            <b>Актеры :</b>    {{ $two->actors }}<br>
                            <b>Режиссер :</b>   {{ $two->director }}
                          </div>
                        </td>
                    </tr>
                </table>

              </div>

            </div>

            <div class="col-sm-2"></div>

          </div>
          </div>
    <!-- one slide end -->
    <!-- one slide end -->

    <!-- one slide begin -->
    <!-- one slide begin -->
    @foreach ($anon as $itm)
          <div class="item">
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-9">
              <div class="thumbnail">
                <table
                class="anounce-table">
                    <tr>
                        <th></th>
                        <th rowspan="6">
                          <!-- film img -->

                            <div class="img-main-small"
                            style="padding-left: 15px; width: 250px; height: 350px;">
                                <img class="" src="img/{{ $itm->img }}" alt="">
                            </div>

                          <!-- film img -->
                        </th>
                    </tr>
                    <tr>
                        <td >
                          <div class="main-wd" >
                          </div>
                        </td>
                    </tr>
                  <tr>
                        <td>
                          <div class="">
                        <b>{{ $itm->name }}  [{{ $itm->date }}]</b>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <div class="">
                            <b>Описание :</b>
                            {{ $itm->des }}
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="">
                            <b>Актеры :</b> {{ $itm->actors }} <br>
                            <b>Режиссер :</b> {{ $itm->director }}
                          </div>
                        </td>
                    </tr>
                </table>
              </div>
              <div class="col-sm-2"></div>
            </div>
              </div>
          </div>
          @endforeach
    <!-- one slide end -->
    <!-- one slide end -->
    </div>
        <br>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
      </div>

  </div>
  <div class="col-sm-1" ></div>

<hr>

<br>
<!-- SLIDER ANOUNCE END -->
<!-- SLIDER ANOUNCE END -->


<!-- footer begin -->
<!-- footer begin -->
<footer>

<div class="jumbotron  bg-secondary text-white" style="margin-bottom:0">
<!-- contact info -->
    <div class="col-sm-5">
      <p>Связь с нами :</p>
      <h3><span class="glyphicon glyphicon-phone"></span> +380 94 32 62 051</h3>
      <h3><span class="glyphicon glyphicon-envelope"></span> eu-cinema@gmail.com</h3>
    </div>
<!-- contact info -->



  <p >&copy; avanti_pro &reg;</p>
  <p >avanti.dev.pro@gmail.com</p>
  <p > 2019 Ukraine Mykolayiv StepAcademy<p>

</div>

</footer>
<!-- footer end -->
<!-- footer end -->



<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/genre.js') }}"></script>
<script src="script.js"></script>

<script>

// $(document).ready(function(){
//
//     $('#search').keyup(function(){
//         // alert(1);
//         var query = $(this).val();
//
//         if (query != '')
//         {
//             var _token = $('input[name="_token"]').val();
//
//             $.ajax()({
//                 url: "{ route('search.fetch')}",
//                 method: "POST",
//                 data: {query:query, _token:_token},
//
//                 success:function(data)
//                 {
//                     $('#result_set').fadeIn();
//                     $('#result_set').html(data);
//                 }
//             });
//         }
//     });
//     $(document).on('click', 'li', function(){
//         $('#search').val($(this).text());
//         $('#result_set').fadeOut();
//     });
// });

</script>

</body>
</html>
