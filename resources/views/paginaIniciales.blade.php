@extends('plantilla')

@section('content')
<!-- EMPEZANDO NAV -->


<!-- KKKK -->
<h1 class="letra-titulo pt-4 pb-3"><strong>Bienvenidos ingresantes</strong></h1>

<!-- FILTRO -->
                      <div class="py-1">
                        
                        
                          <nav class="nav justify-content-start">
                               
                                                            <a href="" class="btn botones-inicio btn-iniciales" id="" data-toggle="modal" data-target="#Informatica" onclick="materiasInicialesAjax('{{route('materiasIniciales')}}')">
                                                           Materias iniciales
                                                             </a>
                              </nav>
                          
                        
                      </div>

  
    
  
            <!-- MODAL -->
            <div class="modal fade bd-example-modal-lg" id="Informatica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        
				  <!-- COMIENZO FILTROS -->
			  <div class="row">
            <div class="col-sm-12">

              <form class="form-inline py-1">
                  <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Mat / Año</span>
                    </div>
                    <input type="text" id="myInputmate" onkeyup="filtroMatAnio()" class="form-control mr-3" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
                    <button type="button" class="btn btn-light" onclick="limpiar()">
                          <i class="fas fa-sync-alt"></i>
                    </button>
                  </div>
                </form>
            </div>
            
		  </div>
		  {{--  <!-- finfiltro////////// -->  --}}
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body table-wrapper-scroll-y my-custom-scrollbar">
		        <table id="materias" class="table table-bordered table-striped mb-0">
					<thead>

					    <tr>
					        <th>Materia</th>
					        <th>Comisiones</th>
					    </tr>
					    
          </thead>
          <!-- AQUI SE LISTAN LAS MATERIAS -->
					 <tbody id="listarMaterias">
					    

					</tbody>

				</table>
              <div id="nohay">
                 <p id="filtroVacio" class="filtroVacio">

                   NO HAY MATERIAS
                 </p>
               </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        
		      </div>
		    </div>
		  </div>
		</div>


	</div>

            
            
            
<script type="text/javascript" src="{{asset('js/filtroMatAnio.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popupMateriasIniciales.js')}}"></script>
<!-- Este script cambia el color de la cabecera - se podría usar un color distinto para cada instituto -->


@endsection