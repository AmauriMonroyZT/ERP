window.setInterval("principal()",3000);
var arreglo=new Array('.img1','.img2','.img3');
var i=0;

function ocultar(img){
	$(img).ready( function(){ $(arreglo[i]).fadeOut(3000); });
	}
function mostrar(img){
	$(img).ready( function(){ $(arreglo[i]).fadeIn(2000); });
	}

function principal(){
    ocultar(arreglo[i]);
    i=(i+1)%3;
    mostrar(arreglo[i]);
}