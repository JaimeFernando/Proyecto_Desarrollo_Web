$(document).ready(function() {			
		
		$('#registro_articulo').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
					message: 'Nombre no Valido',
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
						stringLength: {
							min: 6,
							message: 'EL nombre debe tener como minimo 6 caracteres'
						},						
					}
				},
				resumen: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				abstract: {
					validators: {
						notEmpty: {
							message: 'El campo es requerido'
						},
					}
				
				},
				introduccion: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				metodologia: {
					validators: {
						noEmpty: {							
							message: 'El campo es Requerido'
						},
					}
				
				},
				contenido: {
					validators: {
						notEmpty: {
							message: 'EL campo es Requerido'
						},
					}
				
				},
				fecha_creacion: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				archivo_pdf: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				
				id_status: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},		
				conclusiones: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},			
				agradecimientos: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},				
				referencias: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},															
			}
		});
	});
	
	$(document).ready(function() {			
		
		$('#registro_autor').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
					message: 'Nombre no Valido',
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},										
					}
				},
				apellido: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},										
					}
				},
				email: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},										
					}
				},
			}
		});
	});
	
	$(document).ready(function() {			
		
		$('#registro_indice').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				titulo: {
					message: 'Titulo no Valido',
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
						stringLength: {
							min: 6,
							message: 'EL Titulo debe tener como minimo 6 caracteres'
						},						
					}
				},
				numero: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				id_revista: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}				
				},							
			}
		});
	});
	
		$(document).ready(function() {			
		
		$('#registro_revista').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
					message: 'Nombre no Valido',
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
						stringLength: {
							min: 6,
							message: 'EL nombre debe tener como minimo 6 caracteres '
						},						
					}
				},
				portada: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				fecha: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},	
				volumen: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},		
				titulo: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},		
				subtitulo: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},		
				numero: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},	
				clave: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				directorio: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				editorial: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				id_status: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
			}
		});
	});
	
	$(document).ready(function() {			
		
		$('#registro_status').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				status: {
					message: 'Status no Valido',
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},											
					}
				},						
			}
		});
	});
	
	$(document).ready(function() {
			$(".fancybox").fancybox({
				maxWidth	: 800,
				maxHeight	: 600,
				fitToView	: false,
				width		: '70%',
				height		: '70%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		});
		
	$(document).ready(function() {
		 $('#datetimepicker1').datetimepicker({language: 'es'});
		 $('#datetimepicker2').datetimepicker({language: 'es'});
	});
	