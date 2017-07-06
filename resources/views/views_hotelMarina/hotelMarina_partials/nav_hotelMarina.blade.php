<!-- <div class="example3"> -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">      
      <div class="navbar-header"> 
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
        <div class="item">
            <a href=""><img class="img-responsive" src="{{asset('media/images/logo.png')}}" class="imgLogo" alt=""> </a> 
        </div>      
        
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="" data-toggle="modal" data-target="#myModal"><a href="#">Reservaciones</a></li>
          <li><a href="#">Promociones</a></li>
          <li><a href="#">Contactanos</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Servicios<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Wifi</a></li>
              <li><a href="#">Lavandería</a></li>
              <li><a href="#">Restaurante</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Servicios externos</li>
              <li><a href="#">Estética</li>
              <li><a href="#">Taxi</li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
<!-- </div>  -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">RESERVACIONES</h4>
      </div>
      <div class="modal-body">
        <!-- <div class="container "> -->
          <form>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Llegada</label>
              <div class="col-sm-10">
                <input class="form-control" id="date" name="date"  placeholder="MM/DD/YYY" type="text"/>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Salida</label>
              <div class="col-sm-10">
                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
              </div>
            </div>
            <fieldset class="form-group row">
              <legend class="col-form-legend col-sm-2">Servicios de habitacion</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Estetica
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Lavanderia
                  </label>
                </div>
                <div class="form-check ">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Caja fuerte
                  </label>
                </div>
              </div>
            </fieldset>
            <div class="form-group ">
              <label class="col-sm-2">Adultos</label>
              <select class="selectpicker" data-style="btn-warning" style="">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
              </select>              
            </div>
            <div class="form-group ">
              <label class="col-sm-2">Niños</label>
              <select class="selectpicker" data-style="btn-warning" style="">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
              </select>
            </div>
            <!-- <div class="form-group row">
              <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </div> -->
          </form>
        <!-- </div> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Checar disponibilidad</button>
      </div>
    </div>
  </div>
</div>

