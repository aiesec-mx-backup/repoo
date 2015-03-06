jQuery(function($) {

	agenda_banner = new Array('','','');
	actual = -1;
	
	agenda['10-09-2014'] = { 'Pioneer': [ {'evento':'Brave actions', 'hi':'10-09-2014 7:00:00 AM', 'hf':'10-09-2014 7:30:00 AM'},
										  {'evento':'Void', 'hi':'10-09-2014 7:30:00 AM', 'hf':'10-09-2014 9:00:00 AM'},
										  {'evento':'Arrive', 'hi':'10-09-2014 9:00:00 AM', 'hf':'10-09-2014 10:30:00 AM'},
										  {'evento':'Lift off', 'hi':'10-09-2014 10:30:00 AM', 'hf':'10-09-2014 12:00:00 PM'},
										  {'evento':'Why going to the moon', 'hi':'10-09-2014 12:00:00 PM', 'hf':'10-09-2014 1:00:00 PM'},
										  {'evento':'The space flight and my contribution on it', 'hi':'10-09-2014 1:00:00 PM', 'hf':'10-09-2014 2:00:00 PM'},
										  {'evento':'Lunch', 'hi':'10-09-2014 2:00:00 PM', 'hf':'10-09-2014 3:00:00 PM'},
										  {'evento':'Why being a Pioneer', 'hi':'10-09-2014 3:00:00 PM', 'hf':'10-09-2014 4:00:00 PM'},
										  {'evento':'Setting the right mindset', 'hi':'10-09-2014 4:00:00 PM', 'hf':'10-09-2014 5:00:00 PM'},
										  {'evento':'How to cook the perfect fish', 'hi':'10-09-2014 5:00:00 PM', 'hf':'10-09-2014 7:00:00 PM'},
										  {'evento':'AARON BENITEZ', 'hi':'10-09-2014 7:00:00 PM', 'hf':'10-09-2014 7:30:00 PM'},
										  {'evento':'Landing', 'hi':'10-09-2014 7:30:00 PM', 'hf':'10-09-2014 8:30:00 PM'},
										  {'evento':'Dinner & LC Time', 'hi':'10-09-2014 8:30:00 PM', 'hf':'10-09-2014 9:30:00 PM'},
										  {'evento':'Get Ready', 'hi':'10-09-2014 9:30:00 PM', 'hf':'10-09-2014 10:00:00 PM'},
										  {'evento':'Arabian Party', 'hi':'10-09-2014 10:00:00 PM', 'hf':'10-09-2014 11:59:00 PM'}
										  ]
						      };
	agenda['10-10-2014'] = { 'Pioneer': [ {'evento':'Aligment', 'hi':'10-10-2014 7:00:00 AM', 'hf':'10-10-2014 7:30:00 AM'},
										  {'evento':'Void', 'hi':'10-10-2014 7:30:00 AM', 'hf':'10-10-2014 8:00:00 AM'},
										  {'evento':'Breakfast', 'hi':'10-10-2014 8:00:00 AM', 'hf':'10-10-2014 9:00:00 AM'},
										  {'evento':'Lift off', 'hi':'10-10-2014 9:00:00 AM', 'hf':'10-10-2014 10:00:00 AM'},
										  {'evento':'Control Tower', 'hi':'10-10-2014 10:00:00 AM', 'hf':'10-10-2014 11:30:00 AM'},
										  {'evento':'NASA', 'hi':'10-10-2014 11:30:00 AM', 'hf':'10-10-2014 12:00:00 PM'},
										  {'evento':'Selling 101', 'hi':'10-10-2014 12:00:00 PM', 'hf':'10-10-2014 2:00:00 PM'},
										  {'evento':'Launch', 'hi':'10-10-2014 2:00:00 PM', 'hf':'10-10-2014 3:00:00 PM'},
										  {'evento':'Selling 101', 'hi':'10-10-2014 3:00:00 PM', 'hf':'10-10-2014 4:00:00 PM'},
										  {'evento':'AIESEC Help Desk', 'hi':'10-10-2014 4:00:00 PM', 'hf':'10-10-2014 5:00:00 PM'},
										  {'evento':'Sharing the world´s best kep secret', 'hi':'10-10-2014 5:00:00 PM', 'hf':'10-10-2014 6:00:00 PM'},
										  {'evento':'IC Crew', 'hi':'10-10-2014 6:00:00 PM', 'hf':'10-10-2014 6:30:00 PM'},
										  {'evento':'Dressing', 'hi':'10-10-2014 6:30:00 PM', 'hf':'10-10-2014 7:30:00 PM'},
										  {'evento':'PwC', 'hi':'10-10-2014 7:30:00 PM', 'hf':'10-10-2014 8:00:00 PM'},
										  {'evento':'Don Ramón', 'hi':'10-10-2014 8:00:00 PM', 'hf':'10-10-2014 8:30:00 PM'},
										  {'evento':'Snoopy Awards & Landig', 'hi':'10-10-2014 8:30:00 PM', 'hf':'10-10-2014 10:00:00 PM'},
										  {'evento':'Dinner & LC Time', 'hi':'10-10-2014 10:00:00 PM', 'hf':'10-10-2014 11:00:00 PM'},
										  {'evento':'Star Wars Party', 'hi':'10-10-2014 11:00:00 PM', 'hf':'10-10-2014 11:59:00 PM'}
										  ]
						      };
	agenda['10-11-2014'] = { 'Pioneer': [ {'evento':'Colaboration', 'hi':'10-11-2014 7:00:00 AM', 'hf':'10-11-2014 7:30:00 AM'},
										  {'evento':'Void', 'hi':'10-11-2014 7:30:00 AM', 'hf':'10-11-2014 8:00:00 AM'},
										  {'evento':'Breakfast', 'hi':'10-11-2014 8:00:00 AM', 'hf':'10-11-2014 9:00:00 AM'},
										  {'evento':'Lift off', 'hi':'10-11-2014 9:00:00 AM', 'hf':'10-11-2014 10:00:00 AM'},
										  {'evento':'G2K the coolest rockets', 'hi':'10-11-2014 10:00:00 AM', 'hf':'10-11-2014 11:00:00 AM'},
										  {'evento':'Break', 'hi':'10-11-2014 11:00:00 AM', 'hf':'10-11-2014 11:30:00 AM'},
										  {'evento':'How the best astronaut born?', 'hi':'10-11-2014 11:30:00 AM', 'hf':'10-11-2014 12:30:00 PM'},
										  {'evento':'IGN Crew', 'hi':'10-11-2014 12:30:00 PM', 'hf':'10-11-2014 2:00:00 PM'},
										  {'evento':'Lunch', 'hi':'10-11-2014 2:00:00 PM', 'hf':'10-11-2014 3:00:00 PM'},
										  {'evento':'Finance 101', 'hi':'10-11-2014 3:00:00 PM', 'hf':'10-11-2014 3:30:00 PM'},
										  {'evento':'LEAD', 'hi':'10-11-2014 3:30:00 PM', 'hf':'10-11-2014 4:30:00 PM'},
										  {'evento':'Break', 'hi':'10-11-2014 4:30:00 PM', 'hf':'10-11-2014 5:00:00 PM'},
										  {'evento':'Fueling the spaceship', 'hi':'10-11-2014 5:00:00 PM', 'hf':'10-11-2014 6:30:00 PM'},
										  {'evento':'Bosch', 'hi':'10-11-2014 6:30:00 PM', 'hf':'10-11-2014 7:30:00 PM'},
										  {'evento':'Inglesco', 'hi':'10-11-2014 7:30:00 PM', 'hf':'10-11-2014 8:00:00 PM'},
										  {'evento':'Landing', 'hi':'10-11-2014 8:00:00 PM', 'hf':'10-11-2014 9:00:00 PM'},
										  {'evento':'inner & LC Time', 'hi':'10-11-2014 9:00:00 PM', 'hf':'10-11-2014 10:00:00 PM'},
										  {'evento':'Hunger Games Party ', 'hi':'10-11-2014 10:00:00 PM', 'hf':'10-11-2014 11:59:00 PM'}										  		 
										]
						      };
	agenda['10-12-2014'] = { 'Pioneer': [ {'evento':'Achiving Sucess', 'hi':'10-12-2014 7:00:00 AM', 'hf':'10-12-2014 7:30:00 AM'},
										  {'evento':'Void', 'hi':'10-12-2014 7:30:00 AM', 'hf':'10-12-2014 8:00:00 AM'},
										  {'evento':'Breakfast', 'hi':'10-12-2014 8:00:00 AM', 'hf':'10-12-2014 9:30:00 AM'},
										  {'evento':'Lift off', 'hi':'10-12-2014 9:30:00 AM', 'hf':'10-12-2014 10:30:00 AM'},
										  {'evento':'Simply Journey', 'hi':'10-12-2014 10:30:00 AM', 'hf':'10-12-2014 11:00:00 AM'},
										  {'evento':'Apolo Bringing Back', 'hi':'10-12-2014 11:00:00 AM', 'hf':'10-12-2014 12:30:00 PM'},
										  {'evento':'Crew aboard the spaceship', 'hi':'10-12-2014 12:30:00 PM', 'hf':'10-12-2014 1:30:00 PM'},
										  {'evento':'Lunch', 'hi':'10-12-2014 1:30:00 PM', 'hf':'10-12-2014 2:30:00 PM'},
										  {'evento':'SAFE', 'hi':'10-12-2014 2:30:00 PM', 'hf':'10-12-2014 3:00:00 PM'},
										  {'evento':'Closing Plenary', 'hi':'10-12-2014 3:00:00 PM', 'hf':'10-12-2014 4:00:00 PM'}
										  ]
						      };
	
	
	function agenda()
	{
		hora_local = new Date();
		//console.log(hora_local);
		
		//$.getJSON( "http://time.jsontest.com/", function( data ) {
		//hora_local = new Date(data.date + ' '+ data.time); // new Date(año,mes -0=enero-,dia,hora,minutos,segundos)
		dia_agenda = '10-'+hora_local.getDate()+'-2014';
		elementos = agenda[dia_agenda].Pioneer.length;
		
		$.each(agenda[dia_agenda].Pioneer, function(key, valor) {	
			
			hora_inicio_evento = new Date(valor.hi);
			//hora_inicio_evento.setHours(hora_inicio_evento.getHours()+5);
			hora_fin_evento = new Date(valor.hf);
			//hora_fin_evento.setHours(hora_fin_evento.getHours()+5);
			
			if(hora_local > hora_inicio_evento && hora_local <= hora_fin_evento)
			{
				actual = key;
				inicio = (valor.hi.split(" ")[1]).split(':')[0] + ':'+ (valor.hi.split(" ")[1]).split(':')[1] +' '+valor.hi.split(" ")[2];
				fin = (valor.hf.split(" ")[1]).split(':')[0] + ':'+ (valor.hf.split(" ")[1]).split(':')[1] +' '+valor.hf.split(" ")[2];
				
				agenda_banner[1] = '<p class="text-center"><strong>'+valor.evento+'</strong><br>(Pioneer)</p>';
                agenda_banner[1] += '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+inicio+' - '+fin+'. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="text-right">Ver detalles <span class="glyphicon glyphicon-chevron-right"></span></a></p>';	
			}			
		});
		
		switch(actual)
		{
			case -1: 	inicio = (agenda[dia_agenda].Pioneer[0].hi.split(" ")[1]).split(':')[0] + ':'+ (agenda[dia_agenda].Pioneer[0].hi.split(" ")[1]).split(':')[1] +' '+ agenda[dia_agenda].Pioneer[0].hi.split(" ")[2];
						fin = (agenda[dia_agenda].Pioneer[0].hf.split(" ")[1]).split(':')[0] + ':'+ (agenda[dia_agenda].Pioneer[0].hf.split(" ")[1]).split(':')[1] +' '+agenda[dia_agenda].Pioneer[0].hf.split(" ")[2];
						
						agenda_banner[0] = '<p class="text-center"><strong>'+agenda[dia_agenda].Pioneer[0].evento+'</strong><br>(Pioneer)</p>';
			            agenda_banner[0] += '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+inicio+' - '+fin+'. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="text-right">Ver detalles <span class="glyphicon glyphicon-chevron-right"></span></a></p>';
						agenda_banner[2] = agenda_banner[1] = agenda_banner[0];
						break;
			case 0: 	agenda_banner[0] = agenda_banner[1];
						agenda_banner[2] = '<p class="text-center"><strong>'+agenda[dia_agenda].Pioneer[actual + 1].evento+'</strong><br>(Pioneer)</p>';
                		agenda_banner[2] += '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+agenda[dia_agenda].Pioneer[actual +1].hi+' hrs - '+agenda[dia_agenda].Pioneer[actual+1].hf+' hrs. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="text-right">Ver detalles <span class="glyphicon glyphicon-chevron-right"></span></a></p>';
						break;
			default: 	
						inicio = (agenda[dia_agenda].Pioneer[actual - 1].hi.split(" ")[1]).split(':')[0] + ':'+ (agenda[dia_agenda].Pioneer[actual - 1].hi.split(" ")[1]).split(':')[1] +' '+ agenda[dia_agenda].Pioneer[actual - 1].hi.split(" ")[2];
						fin = (agenda[dia_agenda].Pioneer[actual - 1].hf.split(" ")[1]).split(':')[0] + ':'+ (agenda[dia_agenda].Pioneer[actual - 1].hf.split(" ")[1]).split(':')[1] +' '+agenda[dia_agenda].Pioneer[actual - 1].hf.split(" ")[2];
						agenda_banner[0] = '<p class="text-center"><strong>'+agenda[dia_agenda].Pioneer[actual - 1].evento+'</strong><br>(Pioneer)</p>';
	                	agenda_banner[0] += '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+inicio+' - '+fin+'. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="text-right">Ver detalles <span class="glyphicon glyphicon-chevron-right"></span></a></p>';
	                    
						if(actual < (elementos-1))
						{
	                		inicio = (agenda[dia_agenda].Pioneer[actual + 1].hi.split(" ")[1]).split(':')[0] + ':'+ (agenda[dia_agenda].Pioneer[actual + 1].hi.split(" ")[1]).split(':')[1] +' '+ agenda[dia_agenda].Pioneer[actual - 1].hi.split(" ")[2];
							fin = (agenda[dia_agenda].Pioneer[actual + 1].hf.split(" ")[1]).split(':')[0] + ':'+ (agenda[dia_agenda].Pioneer[actual + 1].hf.split(" ")[1]).split(':')[1] +' '+agenda[dia_agenda].Pioneer[actual - 1].hf.split(" ")[2];
	                		agenda_banner[2] = '<p class="text-center"><strong>'+agenda[dia_agenda].Pioneer[actual + 1].evento+'</strong><br>(Pioneer)</p>';
	                		agenda_banner[2] += '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+inicio+' - '+fin+'. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>';	
						}
						else
						{
	                		agenda_banner[2] = '<p class="text-center"><strong>Void</strong><br>(Pioneer)</p>';
	                		agenda_banner[2] += '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="text-right">Ver detalles <span class="glyphicon glyphicon-chevron-right"></span></a></p>';
						}
						
                		
		}
		
			$('.panel-body-anterior').html(agenda_banner[0]);
			$('.panel-body-actual').html(agenda_banner[1]);
			$('.panel-body-siguiente').html(agenda_banner[2]);
		//});
	}
	agenda();
	setInterval(agenda,60000);
	
	
	
});