"use strict"

document.addEventListener("DOMContentLoaded", start);

function start(){

    const API = "api/comentario";
    let id_juego = document.querySelector("input[name=juego]").value;
    document.querySelector("#btn-borrar").addEventListener("click",eliminarComentario);
    document.querySelector("#formComentario").addEventListener("submit",añadirComentario);
    let app = new Vue({
        el: "#app",
        data: {
            titulo: "comentarios",
            comentarios: [],
            admin:false
        },
        methods:{
            eliminarComentario:eliminarComentario,
            orderBy: async function (event) {
                event.preventDefault();
                let formData = new FormData(orderForm);
                let atributo = formData.get("atributo");
                let criterio = formData.get("criterio");
                try {
                  let response = await fetch(API + "/" +id_juego+ "?sort=" + `${atributo}` + "&order=" + `${criterio}`);
                  let comentarios = await response.json();
                  app.comentarios = comentarios;
                } catch (e) {
                  console.log(e);
            }
        }
    }
          
    })

    getComentariosJuego(id_juego);
 
    async function getComentariosJuego(id_juego){
        try{
            let response = await fetch(API+"/"+id_juego);
            let comentarios = await response.json();
            app.comentarios = comentarios;
            Admin();
        }
        catch(e){
            console.log(e);
        }
    }

    async function añadirComentario(e){
        e.preventDefault();

        let data = {
            texto : document.querySelector("textarea[name=Texto").value,
            puntaje : document.querySelector("input[name=puntaje]").value,
            id_juego : document.querySelector("input[name=juego]").value,
            fecha : null
        }
        try{
            await fetch(API,{
                method:"POST",
                 headers:{"Content-type":"application/JSON"},
               body: JSON.stringify(data)
            })
        }
        catch(e){
            console.log(e);
        }
        getComentariosJuego(id_juego);
    }

    async function eliminarComentario(id) {
        console.log(id);
        try {
            await fetch(API+"/"+id, {
                method: 'DELETE'
            });
        } catch (e) {
            console.log(e);
        }
        getComentariosJuego(id_juego);
    }

function Admin(){
    let admin = document.querySelector("input[name=admin]").value;
    if(admin){
        app.admin = true;
    }
}


}
