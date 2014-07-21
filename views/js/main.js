$(document).ready(function() {			
		//CIUDAD
	$('#registro_ciudad').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { nombre: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
               }
        } 
        });
	
	//CONTINENTE
$('#registro_continente').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { nombre: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
               }
        } 
        });
	
			//EQUIPO		
		$('#registro_equipo').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The name must be more than 3 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                    }
                }
               },
				id_pais: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						}
					}				
				},
				 escudo:{
                validators: {
                    file: {
                        extension:'jpg,png',
                        type: 'image/jpg,image/png',
                        maxSize: 2048 * 1024,   // 2 MB
                        message: 'The selected file is not valid'
                   		 }
                	}
            	}								
			}
		});


	
			//ESTADIO			
		$('#registro_estadio').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The name must be more than 3 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                    }
                }
               },
               id_ciudad: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						}
					}				
				}	
			}		
	});
	
	//INTEGRANTE (ENTRENADOR)
		$('#registro_entrenador').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				  id_pais: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						}
					}				
				}	
			}		
	});

	//INTEGRANTE (INTEGRANTE)
		$('#registro_integrante').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The name must be more than 3 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                    }
                }
               },
               apellido: {
                message: 'The lastname is not valid',
                validators: {
                    notEmpty: {
                        message: 'The lastname is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The lastname must be more than 3 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The lastname can only consist of alphabetical, number and underscore'
                    }
                }
               },
               peso: {
                validators: {
                    notEmpty: {
                        message: 'El peso es requerido'
                    },
                    between: {
                        min: 30,
                        max: 100,
                        message: 'El peso debe ser entre 30 y 100'
                    },
                    integer: {
                        message: 'The value is not an integer'
                    }
                }
            },
            estatura: {
                validators: {
                    notEmpty: {
                        message: 'La estatura es requerida'
                    },
                    between: {
                        min: 1,
                        max: 10,
                        message: 'El valor no es correcto'
                    },
                    integer: {
                        message: 'The value is not an integer'
                    }
                }
            },
            foto:{
                validators: {
                    file: {
                        extension:'jpeg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2048 * 1024,   // 2 MB
                        message: 'The selected file is not valid'
                    }
                }
            },
            edad: {
                validators: {
                    notEmpty: {
                        message: 'La edad es requerida'
                    },
                    between: {
                        min: 10,
                        max: 100,
                        message: 'El valor no es correcto'
                    },
                    integer: {
                        message: 'The value is not an integer'
                    }
                }
            },
             id_equipo: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						}
					}				
			}
		}		
	});

//INTEGRANTE (Jugador)
		$('#registro_jugador').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				  numero: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
						integer: {
                        message: 'The value is not an integer'
                    	}
					}				
				},
				id_integrante: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						}
					}				
				},
				id_posicion: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						}
					}				
				}
			}		
	});

	//PAIS
	$('#registro_pais').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { nombre: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                    }
                	}
               	},
               bandera:{
                validators: {
                    file: {
                        extension:'jpeg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2048 * 1024,   // 2 MB
                        message: 'The selected file is not valid'
                    }
                }
            },
            id_continente: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						}
					}				
				}
        } 
        });
	
	
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
	
	

$('#datetimepicker1').datetimepicker({language: 'es'});
$('#datetimepicker2').datetimepicker({language: 'es'});
	
	});