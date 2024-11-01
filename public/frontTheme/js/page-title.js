const title = {
    "inicio": "Inicio",
    "acerca": "Quienes somos",
    "programa": "Programa de formación",
    "contacto": "Contacto",
    "noticias": "Noticias",
}

let pageTitle = $("#page-title").data("title");

$("#encabezado").html(title[pageTitle]);
