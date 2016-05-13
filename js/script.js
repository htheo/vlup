var elem2;
		elem2 = "accueil";
		var x;
		x=1;

			function appear(elem)
			   {
			 		
				 	document.getElementById("info").style.marginLeft= "-100%";
				document.getElementById("cave").style.marginTop= "-100%";
				 	document.getElementById("formulaire").style.marginLeft= "100%";
				 
			
		}
			function appear2(elem)
			   {
			 	if (elem == elem2){

			 	}
			 	else {

				 	document.getElementById(elem).style.marginLeft= "0%";

				 	document.getElementById("cave").style.marginTop= "-100%";
					 document.getElementById("formulaire").style.marginLeft= "100%";

				}

			}
			function appear3(elem){
				 if (elem == elem2){

				 }
				 else {

				 	document.getElementById(elem).style.marginLeft= "0%";
					document.getElementById("cave").style.marginTop= "-100%";
					 	document.getElementById("info").style.marginLeft= "-100%";
					}


				

				}
				function appear4(elem){
				 
					
				 	document.getElementById(elem).style.marginTop= "-100%";
				 }
				 function appear5(elem){
				 
					if (x == 1){
						document.getElementById(elem).style.marginTop= "-100%";
						x = 0;


					}else{
						document.getElementById(elem).style.marginTop= "0%";
						x = 1;
						
					}				 	
				 }
				function slide1() {
					document.getElementById("slide").style.marginLeft= "0%";
					document.getElementById("1").className= "point";
					document.getElementById("2").className= "point2";
					document.getElementById("3").className= "point2";

				}
				function slide2() {
					document.getElementById("slide").style.marginLeft= "-66.7%";
					document.getElementById("2").className= "point";
					document.getElementById("1").className= "point2";
					document.getElementById("3").className= "point2";

				}
				function slide3() {
					document.getElementById("slide").style.marginLeft= "-133%";
					document.getElementById("3").className= "point";
					document.getElementById("1").className= "point2";
					document.getElementById("2").className= "point2";

				}
				function grande(elem){
					document.getElementById(elem).className= "grande_img";
				}
				function petit(elem){
					document.getElementById(elem).className= "image_dessin";
				}




