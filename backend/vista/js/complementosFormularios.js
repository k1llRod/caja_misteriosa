$(document).ready(function(){
	recargaSubgrupo();
	$('#grupo_contable').change(function(){
		//console.log($('#listaActa').val());
		recargaSubgrupo();

	});

})

function recargaSubgrupo(){
	
	var contenidoGrupo = $('#grupo_contable').val();
	var contenidoAnterior = '';
	console.log('contenidoGrupo ',contenidoGrupo);
	if(contenidoGrupo == ''){
		contenidoAnterior = '<option value="">Seleccione subgrupo contable</option>';
	}
	
	$.ajax({
		url:'vista/ajax/gestorActivo.php',
		method:"POST",
		data:'grupo='+contenidoGrupo,
		success:function(r){
			console.log('r ',r);
			
			$('#subgrupo').html(contenidoAnterior+r);
			
		}
	});
	
}

$(document).ready(function(){
	recargaUbicacionOficina();
	
	$('#ubicacion').change(function(){
		console.log($('#ubicacion').val());
		recargaUbicacionOficina();
		recargaEncargado();
	});

})
function recargaUbicacionOficina(){
	
	var contenidoUbicacion = $('#ubicacion').val();
	var contenidoAnterior = '';
	console.log('contenidoUbicacion ',contenidoUbicacion);

		contenidoAnterior = '<option value="">Seleccionar oficina</option>';

	
	$.ajax({
		url:'vista/ajax/gestorActivo.php',
		method:"POST",
		data:'ubicacion='+contenidoUbicacion,
		success:function(r){
			console.log('r ',r);
			
			$('#central').html(contenidoAnterior+r);
			
		}
	});
}
$(document).ready(function(){
	recargaEncargado();
	$('#central').change(function(){
		console.log($('#central').val());
		recargaEncargado();
	});
})
function recargaEncargado(){
	var contenidoCentral = $('#central').val();
	var centralAnterior = '';
	console.log('contenido central',contenidoCentral);
	//if(contenidoCentral == ''){
	centralAnterior = '<option value="">Seleccionar encargado</option>';
	//}
	
	$.ajax({
		url:'vista/ajax/gestorActivo.php',
		method:"POST",
		data:'central='+contenidoCentral,
		success:function(r){
			console.log('r encargado',r);
			
			$('#encargado').html(centralAnterior+r);
			
		}
	});
	
}

$('.desplegar_botones').click(function(){
	//console.log($(this).parent().find('tr.estado_botons',this));
	$(this).next('tr').toggle('slow');
	//$(this).parent().find('tr.estado_boton',this).toggle();
});