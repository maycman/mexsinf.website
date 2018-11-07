$(document).ready(function ()
{
	//Efecto para cambiar clase a la barra de navegacion
    //var url = window.location;
    // Solo funcionara si la cadena en href coincide con location
    //$('ul.nav a[href="' + url + '"]').parent().addClass('active');
    // Tambien trabajara para relativa y absoluta hrefs
    //$('ul.nav a').filter(function ()
    //{
    //    return this.href == url;
    //}).parent().addClass('active');

    //Fondo aleatorio
    //var imagenes = ['fond1.jpg', 'fond2.jpg', 'fond3.jpg', 'fond4.jpg', 'fond5.jpg'];
    //$('.imgen').css({'background-image': 'url(img/' + imagenes[Math.floor(Math.random() * imagenes.length)] + ')'});

    
    //Implementación de juego de clases
    var pag = location.href.substring(location.href.lastIndexOf('=')+1, location.href.lastIndexOf(''));
    //$("#"pag).addClass("active","active");
    $("#"+pag).attr("class", "active");
});