@foreach ( $genr as $itm )
<div class="row  one-film"  style="float: left; margin-left: 40px;">
<div class="name-pos">
  <input type="hidden" name="" value="{{ $itm->id }}">

  <h4 class="content-film-h4">{{ $itm->filmname }}</h4>
</div> <br>
<span>&nbsp;</span>
<table>
  <th>
<td>
  <!-- small image -->
          <img class="img-main-small" src="img/{{ $itm->img }}" alt="">
  <!-- small image -->
</td>
<td>
<div class="content-film">
<div class="block" >
    <b class="h5-pos">Страна: </b> <br>
  <h6 class="">
    {{ $itm->country }}
  </h6>
</div>
<div class="block">
  <b class="h5-pos">Жанр: </b> <br>
  <h6 class="">
      {{ $itm->genre }}
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
        <td>  {{ $itm->year }} </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><a  href="#" class="btn mary" data-toggle="modal"
          data-target="#myModal">more </a></td>
        <td>&nbsp;</td>
        <td>
          <a  href="{{ $itm->url }}" target="_blank" class="btn btn-success btn-w">
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

@endforeach


<!-- pagination begin -->
<!-- pagination begin -->
  <div class="row">
    <div class="col-sm-5"></div>
    <div class="col-sm-5">
          {{ $genr->links() }}
    </div>
    <div class="col-sm-2"></div>
  </div>
<!-- pagination end -->
<!-- pagination end -->
