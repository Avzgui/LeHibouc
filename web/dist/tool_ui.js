$(document).ready(function(){

	/*  Widgets display toggle according to the active menu item
		Most use the display property, some use the visibility property to have the rendering done at window initialisation and the JavaScript functional
	*/

	$('#nav_traces > li > a').click(function(){

		var id = $(this).attr('id');

		$(this).parent().addClass('active');
		$(this).parent().siblings().removeClass('active');

		var toolbox_vis = $('#toolbox').css('display') == 'block' ? true : false;

		//switch on the menu item id
		switch (id)
		{
			case 'load_trace' : $('#traces_header').html('Charger trace');
								$('#widgets').show();
								$('#trace-transformed-widget, #scale3').css('visibility','hidden');
								$('#trace-preview-widget, #scale2').css('visibility','hidden');
								$('#obsel-inspector').css('visibility','visible');
								$('#obsel-inspector-transformed').css('visibility','hidden');
								$('#importer').show();
								$('#transformation_list').hide();
								$('#importer-transformation').hide();
								$('#apply-btn, #tw-link-btn').css('visibility', 'hidden');
								if(toolbox_vis)
								{
									$('#toolbox').hide();
									$('#traces').css('height', '90%');
								}
								break;

			case 'transform_trace' : 	$('#traces_header').html('Transformer trace');
										$('#widgets').hide();
										$('#trace-transformed-widget, #scale3').css('visibility','visible');
										$('#trace-preview-widget, #scale2').css('visibility','visible');
										$('#obsel-inspector').css('visibility','hidden');
										$('#obsel-inspector-transformed').css('visibility','visible');
										$('#importer').hide();
										$('#transformation_list').hide();
										$('#importer-transformation').hide();
										$('#apply-btn, #tw-link-btn').css('visibility', 'visible');
										if(!toolbox_vis)
										{
											$('#toolbox').show();
											$('#traces').css('height', '50%');
										}
									 	break;

			case 'compare_trace' : 	$('#traces_header').html('Comparer trace');
									$('#widgets').show();
									$('#trace-transformed-widget, #scale3').css('visibility','visible');
									$('#trace-preview-widget, #scale2').css('visibility','hidden');
									$('#obsel-inspector').css('visibility','visible');
									$('#obsel-inspector-transformed').css('visibility','visible');
									$('#importer').hide();
									$('#transformation_list').hide();
									$('#importer-transformation').hide();
									$('#apply-btn, #tw-link-btn').css('visibility', 'hidden');
									if(toolbox_vis)
									{
										$('#toolbox').hide();
										$('#traces').css('height', '90%');
									}
								   	break;

			case 'import_transformation' : 	$('#traces_header').html('Importer transformation');
											$('#widgets').hide();
											$('#trace-transformed-widget, #scale3').css('visibility','visible');
											$('#trace-preview-widget, #scale2').css('visibility','hidden');
											$('#obsel-inspector').css('visibility','hidden');
											$('#obsel-inspector-transformed').css('visibility','visible');
											$('#importer-transformation').show();
											$('#importer').hide();
											$('#transformation_list').hide();
											$('#apply-btn, #tw-link-btn').css('visibility', 'hidden');
											if(toolbox_vis)
											{
												$('#toolbox').hide();
												$('#traces').css('height', '90%');
											}
											break;

			case 'history' : 	$('#traces_header').html('Historique');
								$('#widgets').hide();
								$('#trace-transformed-widget, #scale3').css('visibility','visible');			
								$('#trace-preview-widget, #scale2').css('visibility','hidden');
								$('#obsel-inspector').css('visibility','hidden');
								$('#obsel-inspector-transformed').css('visibility','visible');								
								$('#transformation_list').show();
								$('#importer').hide();
								$('#importer-transformation').hide();
								$('#apply-btn, #tw-link-btn').css('visibility', 'hidden');
								if(toolbox_vis)
								{
									$('#toolbox').hide();
									$('#traces').css('height', '90%');
								}
								break;

			case 'download_transformation' : 	$('#traces_header').html('Télécharger transformation');
												$('#widgets').hide();
												$('#trace-transformed-widget, #scale3').css('visibility','visible');
												$('#trace-preview-widget, #scale2').css('visibility','hidden');
												$('#obsel-inspector').css('visibility','hidden');
												$('#obsel-inspector-transformed').css('visibility','visible');												
												$('#transformation_list').show();
												$('#importer').hide();
												$('#apply-btn, #tw-link-btn').css('visibility', 'hidden');
												if(toolbox_vis)
												{
													$('#toolbox').hide();
													$('#traces').css('height', '90%');
												}
												break;

			default : break;
		}
	});
	
	//enable the apply button when a transformation is made
	$('#delete-obs').click(function(){
	  $("#apply-btn").prop("disabled", false);
	});

	$('#add-obs').click(function(){
	  $("#apply-btn").prop("disabled", false);
	});

	$('#modify-obs').click(function(){
	  $("#apply-btn").prop("disabled", false);
	});


	/*  Toolbox rows display according to the active toolbox menu item
		Rows are shown and hidden
		Suggestion triggers are instanciated
	*/
	$('#nav_pills > li > a').click(function(){

			var id = $(this).attr('id');

			$(this).parent().addClass('active');
			$(this).parent().siblings().removeClass('active');

			switch (id)
			{
				case 'ajouter_obsel' : 
									$('#row_add').show();
									$('#row_replace').hide();
									$('#row_delete').hide();
									$('#row_fusion').hide();
									break;
									
				case 'transformer_obsel' : 
									$('#row_add').hide();
									$('#row_replace').show();
									$('#row_delete').hide();
									$('#row_fusion').hide();
									document.getElementById('suggestion-delete').innerHTML = "";
									document.getElementById('suggestion-fusion').innerHTML = "";
									document.getElementById('suggestion-replace').innerHTML = "utiliser le système de suggestions?<br><input type=\"checkbox\" id=\"activer_suggestion\">";
									break;

				case 'supprimer_obsel' : 	
									$('#row_add').hide();
									$('#row_replace').hide();
									$('#row_delete').show();
									$('#row_fusion').hide();
									document.getElementById('suggestion-replace').innerHTML = "";
									document.getElementById('suggestion-fusion').innerHTML = "";
									document.getElementById('suggestion-delete').innerHTML = "utiliser le système de suggestions?<br><input type=\"checkbox\" id=\"activer_suggestion\">";
								   	break;

				case 'fusionner_obsel' : 	
									$('#row_add').hide();
									$('#row_replace').hide();
									$('#row_delete').hide();
									$('#row_fusion').show();
									document.getElementById('suggestion-replace').innerHTML = "";
									document.getElementById('suggestion-delete').innerHTML = "";
									document.getElementById('suggestion-fusion').innerHTML = "utiliser le système de suggestions?<br><input type=\"checkbox\" id=\"activer_suggestion\">";
								   	break;

				default : break;
			}
		});


/*-------------------------------------------ProgressBar-------------------------------------------*/

	
	/* Row Add Obsel col Type*/
	$('#add_type').change(function(){
		if ($('#add_type option:selected').attr("id")!="vide"){
			$("#row_add > .step:nth-child(1) .progress-bar").removeClass('progress-bar-undone').addClass('bg-purple');
			$("#row_add > .step:nth-child(2) .progress-bar").trigger("click");
		} else {
			$("#row_add > .step:nth-child(1) .progress-bar").removeClass('bg-purple').addClass('progress-bar-undone');
		}
	});

	/* Row Add Obsel col TimeStamp*/
	$("#add_TimeStamp[type='text']").change(function(){
		if ($("#add_TimeStamp[type='text']").val()!=""){
			$("#row_add > .step:nth-child(2) .progress-bar").removeClass('progress-bar-undone').addClass('bg-darkblue');
			$("#row_add > .step:nth-child(3) .progress-bar").trigger("click");
		} else {
			$("#row_add > .step:nth-child(2) .progress-bar").removeClass('bg-darkblue').addClass('progress-bar-undone');
		}
	});

	/* Row Add Obsel col Attributs*/
	$('#row_add').change(function(){
		var any = false;
		var someoptions=false;
		$("#attrs option:selected").each(function(){
			if($(this).hasClass("facultatif") && $(this).attr("id")=="empty") {
				someoptions=true;
			}
			if(!$(this).hasClass("facultatif")) {
			    if($(this).attr("id")=="empty"){
			        any = true;
			    } else {
			    	any = false;
			    }
			}
		});
		if((any==false) && ($('#row_add .step-choice option:selected').attr("id")!="vide")){
			$("#add-obs").prop("disabled", false);
			$("#row_add > .step:nth-child(3) .progress-bar").removeClass('progress-bar-undone').addClass('bg-mediumblue');
			setTimeout(function() {
				if(($(window).width()<990) && someoptions==false){
					$("#skip-attrs1").css('display', 'inherit');
				} else {
					$("#row_add > .step:nth-child(4) .progress-bar").trigger("click");
				}
			}, 100);
		} else {
			$("#row_add > .step:nth-child(3) .progress-bar").removeClass('bg-mediumblue').addClass('progress-bar-undone');
			$("#skip-attrs1").css('display', 'none');
		}
	});

	/* Row Add Obsel col Submit*/
	$('#row_add').change(function(){
		var testprogressbar=false;
		$("#row_add .progress-bar").each( function(){
			if(!($(this).parent().parent().hasClass("step-suggest")||$(this).parent().parent().hasClass("step-submit")||$(this).parent().parent().hasClass("step-select"))) {
				if(/bg[^\s]+/.test($(this).attr("class"))) {
					testprogressbar = true;
				}
				else {
					testprogressbar = false;
				}
			}
		});
		if (testprogressbar==true) {
		$("#row_add .step-submit .progress-bar").removeClass('progress-bar-undone').addClass('bg-green');
		} else {
		$("#row_add .step-submit .progress-bar").removeClass('bg-green').addClass('progress-bar-undone');	
		}
	});

	/* Row Replace Obsel col Selection*/
		$('#img_replace').change(function(){
		var element=$("#replace_1");
			if(element.length>0) {
				$("#row_replace > .step:nth-child(1) .progress-bar").removeClass('progress-bar-undone').addClass('bg-mauve');
				$("#row_replace > .step:nth-child(2) .progress-bar").trigger("click");
			} else {
				$("#row_replace > .step:nth-child(1) .progress-bar").removeClass('bg-mauve').addClass('progress-bar-undone');	
			}
		});

	/* Row Replace Obsel col Type*/
		$('#row_replace .step-choice').change(function(){
		if ($('#row_replace .step-choice option:selected').attr("id")!="vide"){
			$("#row_replace > .step:nth-child(2) .progress-bar").removeClass('progress-bar-undone').addClass('bg-purple');
			$("#row_replace > .step:nth-child(3) .progress-bar").trigger("click");
		} else {
			$("#row_replace > .step:nth-child(2) .progress-bar").removeClass('bg-purple').addClass('progress-bar-undone');
		}
	});

	/* Row Replace Obsel col TimeStamp*/
		$("#replace_TimeStamp[type='text']").change(function(){
		if ($("#replace_TimeStamp[type='text']").val()!=""){
			$("#row_replace > .step:nth-child(3) .progress-bar").removeClass('progress-bar-undone').addClass('bg-darkblue');
			$("#row_replace > .step:nth-child(4) .progress-bar").trigger("click");
		} else {
			$("#row_replace > .step:nth-child(3) .progress-bar").removeClass('bg-darkblue').addClass('progress-bar-undone');
		}
	});

	/* Row Replace Obsel col Attributs*/
	$('#row_replace').change(function(){
		var any = false;
		var someoptions2=false;
		$("#attrs_replace option:selected").each(function(){
			if($(this).hasClass("facultatif") && $(this).attr("id")=="empty") {
				someoptions2=true;
			}
			if(!$(this).hasClass("facultatif")) {
					if($(this).attr("id")=="empty") {
				        any = true;
				    } else {
				    	any = false;
				    }
				}
		});
		if((any==false) && ($('#row_replace .step-choice option:selected').attr("id")!="vide")){
			$("#row_replace > .step:nth-child(4) .progress-bar").removeClass('progress-bar-undone').addClass('bg-mediumblue');
			setTimeout(function() {
				if(($(window).width() <990) && someoptions2==false){
					$("#skip-attrs2").css('display', 'inherit');
				} else {
					$("#row_replace > .step:nth-child(6) .progress-bar").trigger("click");
				}
			}, 100);

		} else {
			$("#row_replace > .step:nth-child(4) .progress-bar").removeClass('bg-mediumblue').addClass('progress-bar-undone');
			$("#skip-attrs2").css('display', 'none');
		}
	});

	/* Row Replace Obsel col Attributs*/
	$('#row_replace').change(function(){
		var testprogressbar=0;

		$("#row_replace .progress-bar").each( function(){

			if(!($(this).parent().parent().hasClass("step-suggest")||$(this).parent().parent().hasClass("step-submit")||$(this).parent().parent().hasClass("step-select"))) {
				
				if(/.progress-bar-undone/.test($(this).attr("class"))) {
					testprogressbar--;
				}
				else {
					testprogressbar++;
				}
			}
		});
		if (testprogressbar==3) {
		$("#row_replace .step-submit .progress-bar").removeClass('progress-bar-undone').addClass('bg-green');
		} else {
		$("#row_replace .step-submit .progress-bar").removeClass('bg-green').addClass('progress-bar-undone');	
		}
	});


	/* Row Replace Obsel col Suggestion*/
	$("#row_replace .step-suggest").change(function(){
			if($("#row_replace #activer_suggestion").is(':checked')==true) {
				$("#row_replace > .step-suggest .progress-bar").removeClass('progress-bar-undone').addClass('bg-lightblue');
				$("#row_replace > .step:nth-child(7) .progress-bar").trigger("click");
			} else {
				$("#row_replace > .step-suggest .progress-bar").removeClass('bg-lightblue').addClass('progress-bar-undone');
			}
	});

	/* Row fusion Obsel col Selection*/
		$('#img_fusion').change(function(){
		var element=$("#fusion_1");
			if(element.length>0) {
				$("#row_fusion > .step:nth-child(1) .progress-bar").removeClass('progress-bar-undone').addClass('bg-mauve');
				$("#row_fusion > .step:nth-child(2) .progress-bar").trigger("click");
			} else {
				$("#row_fusion > .step:nth-child(1) .progress-bar").removeClass('bg-mauve').addClass('progress-bar-undone');	
			}
		});

	/* Row fusion Obsel col Type*/
		$('#row_fusion .step-choice').change(function(){
		if ($('#row_fusion .step-choice option:selected').attr("id")!="vide"){
			$("#row_fusion > .step:nth-child(2) .progress-bar").removeClass('progress-bar-undone').addClass('bg-purple');
			$("#row_fusion > .step:nth-child(3) .progress-bar").trigger("click");
		} else {
			$("#row_fusion > .step:nth-child(2) .progress-bar").removeClass('bg-purple').addClass('progress-bar-undone');
		}
	});

	/* Row fusion Obsel col TimeStamp*/
		$("#fusion_TimeStamp[type='text']").change(function(){
		if ($("#fusion_TimeStamp[type='text']").val()!=""){
			$("#row_fusion > .step:nth-child(3) .progress-bar").removeClass('progress-bar-undone').addClass('bg-darkblue');
			$("#row_fusion > .step:nth-child(4) .progress-bar").trigger("click");
		} else {
			$("#row_fusion > .step:nth-child(3) .progress-bar").removeClass('bg-darkblue').addClass('progress-bar-undone');
		}
	});

	/* Row fusion Obsel col Attributs*/
	$('#row_fusion').change(function(){
		var any = false;
		var someoptions2=false;
		$("#attrs_fusion option:selected").each(function(){
			if($(this).hasClass("facultatif") && $(this).attr("id")=="empty") {
				someoptions2=true;
			}
			if(!$(this).hasClass("facultatif")) {
					if($(this).attr("id")=="empty") {
				        any = true;
				    } else {
				    	any = false;
				    }
				}
		});
		if((any==false) && ($('#row_fusion .step-choice option:selected').attr("id")!="vide")){
			$("#row_fusion > .step:nth-child(4) .progress-bar").removeClass('progress-bar-undone').addClass('bg-mediumblue');
			setTimeout(function() {
				if(($(window).width() <990) && someoptions2==false){
					$("#skip-attrs2").css('display', 'inherit');
				} else {
					$("#row_fusion > .step:nth-child(6) .progress-bar").trigger("click");
				}
			}, 100);

		} else {
			$("#row_fusion > .step:nth-child(4) .progress-bar").removeClass('bg-mediumblue').addClass('progress-bar-undone');
			$("#skip-attrs2").css('display', 'none');
		}
	});

	/* Row fusion Obsel col Attributs*/
	$('#row_fusion').change(function(){
		var testprogressbar=0;

		$("#row_fusion .progress-bar").each( function(){

			if(!($(this).parent().parent().hasClass("step-suggest")||$(this).parent().parent().hasClass("step-submit")||$(this).parent().parent().hasClass("step-select"))) {
				
				if(/.progress-bar-undone/.test($(this).attr("class"))) {
					testprogressbar--;
				}
				else {
					testprogressbar++;
				}
			}
		});
		if (testprogressbar==3) {
		$("#row_fusion .step-submit .progress-bar").removeClass('progress-bar-undone').addClass('bg-green');
		} else {
		$("#row_fusion .step-submit .progress-bar").removeClass('bg-green').addClass('progress-bar-undone');	
		}
	});


	/* Row fusion Obsel col Suggestion*/
	$("#row_fusion .step-suggest").change(function(){
			if($("#row_fusion #activer_suggestion").is(':checked')==true) {
				$("#row_fusion > .step:nth-child(5) .progress-bar").removeClass('progress-bar-undone').addClass('bg-lightblue');
				$("#row_fusion > .step:nth-child(6) .progress-bar").trigger("click");
			} else {
				$("#row_fusion > .step:nth-child(5) .progress-bar").removeClass('bg-lightblue').addClass('progress-bar-undone');
			}
	});

	/* Row Delete Obsel col Suggestion*/
	$("#row_delete .step-suggest").change(function(){
			if($("#row_delete #activer_suggestion").is(':checked')==true) {
				$("#row_delete > .step:nth-child(2) .progress-bar").removeClass('progress-bar-undone').addClass('bg-lightblue');
			} else {
				$("#row_delete > .step:nth-child(2) .progress-bar").removeClass('bg-lightblue').addClass('progress-bar-undone');
			}
	});

	/* Clear ProgressBar when Push Button Go !*/
	$("#add-obs").click(function(){
		    $("#row_add .progress-bar").each( function(){
  				this.className = this.className.replace(/bg[^\s]+/, 'progress-bar-undone');
			});
			$("#add-obs").prop("disabled", true);
		});

	$("#modify-obs").click(function(){
			$("#row_replace .progress-bar").each( function(){
  				this.className = this.className.replace(/bg[^\s]+/, 'progress-bar-undone');
			});
			setTimeout(function() {			
			$("#activer_suggestion").prop('checked', false);
			}, 100);			
	});

	$("#delete-obs").click(function(){
			$("#row_delete .progress-bar").each( function(){
  				this.className = this.className.replace(/bg[^\s]+/, 'progress-bar-undone');
			});	
			setTimeout(function() {			
			$("#activer_suggestion").prop('checked', false);
			}, 100);
	});


//responsive toolbox accordion
	$('.progress-bar').click(function(){
		if($(window).width() < 990) {
				$(this).closest('.step').css({"height":"70%", "overflow":"scroll"});
				$(this).closest('.step').siblings().height(20);
			
		}});

	

	$('#skip-attrs1').click(function(){
		if($(window).width() < 990) {
			$("#row_add > .step:nth-child(4) .progress-bar").trigger("click");

		}
	});

	$('#skip-suggestion').click(function(){
		$("#row_replace > .step:nth-child(6) .progress-bar").removeClass('progress-bar-undone').addClass('bg-lightblue');
		if($(window).width() < 990) {
			$("#row_replace > .step:nth-child(7) .progress-bar").trigger("click");
		}
	});

	$('#skip-attrs2').click(function(){
		if($(window).width() < 990) {
			$("#row_replace > .step:nth-child(6) .progress-bar").trigger("click");

		}
	});




	//switching toggle icons
	$('.navbar-toggle').click(function(){
		if($(this).hasClass("collapsed")){
			$(this).find(".glyphicon").removeClass('glyphicon-collapse-down').addClass('glyphicon-collapse-up');
		} else {
			$(this).find(".glyphicon").removeClass('glyphicon-collapse-up').addClass('glyphicon-collapse-down');
		}
		
	});

	// collapse responsive navbar on click
	$('#nav_traces_collapse a').on('click', function(){ 
        if($('.nav_traces_header > .navbar-toggle').css('display') !='none'){
            $(".nav_traces_header > .navbar-toggle").trigger( "click" );
        }
    });

    $('#nav_tools_collapse a').on('click', function(){ 
        if($('.nav_tools_header > .navbar-toggle').css('display') !='none'){
            $(".nav_tools_header > .navbar-toggle").trigger( "click" );
        }
    });


});