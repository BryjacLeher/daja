<style>
    


    :root {
    /* Valor de color3: {{ config('consulmex.color3') }} */
    --color-primario: #3B9691;
    --color-secundario: #58CAC5;
    --color-hover: #337471;
    --color3: #D3F1F0;
    --colorFuenteP: #FFFF;
    --colorFuenteS: #000000;
    --tamanio-texto: 16px;
    --fuente: "Lato:ital,wght@0,300;0,400;0,700;1,700&display=swap";
  }
.lato-light {
  font-family: "Lato", sans-serif;
  font-weight: 300;
  font-style: normal;
}

.lato-regular {
  font-family: "Lato", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.lato-bold {
  font-family: "Lato", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.lato-bold-italic {
  font-family: "Lato", sans-serif;
  font-weight: 700;
  font-style: italic;
}

.cuadroNavegacion {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  margin: 2rem auto;
}

.campo {
  height: 2rem;
  border: none;
  /* Quita los bordes */
  background-color: var(--color3);
  padding-left: 0.5rem;
  padding-bottom: 0.2rem;
  align-items: center;
}

.campobotonb {
  height: 2rem;
  border: none;
  /* Quita los bordes */
  padding-left: 0.5rem;
  padding-bottom: 0.2rem;
}

label {
  font-weight: 500;
}

.input-group {
  border-radius: 0.25rem;
  /* Aplica bordes redondeados en el cuadro de búsqueda */
  margin-left: 1rem;
}

.input-group>*:first-child {
  border-radius: 0.25rem 0 0 0.25rem;
  /* Aplica bordes redondeados solo en el lado izquierdo */
}

.input-group>*:last-child {
  border-radius: 0 0.25rem 0.25rem 0;
  /* Aplica bordes redondeados solo en el lado derecho */
}

.fbusqueda {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.bloqueBusqueda {
  display: grid;
  grid-template-rows: repeat(2, 1fr);

}

.contBotonesInndex {
  display: flex;
  flex-direction: row;
  justify-content: end;
  align-items: end;
  width: 100%;
}

.gruesa {
  font-weight: bold !important;
}


/* Jenni */


.contenedorGrande {
  margin: 0 25px 0 25px;
}

.contenedorChico {
  width: 80%;
  margin: 0 auto;
}


.botones-container {
  display: flex;
  flex-direction: column;
  gap: 10px;
  /* Espacio entre los botones */
}

.boton-editar,
.boton-eliminar {
  width: 100%;
  /* Los botones ocupan todo el ancho disponible */
  padding: 10px;
  text-align: center;
}

/* .table-striped tbody tr:nth-of-type(odd) { */
.table-striped>tbody>tr:nth-child(odd)>td,
.table-striped>tbody>tr:nth-child(odd)>th {
  background-color: var(--color3);
}

.table-striped thead th {
  background-color: var(--color-primario);
}


/* EBER */
.boton_inicio {
  display: inline-block;
  width: 23%;
  height: 85%;
  font-size: 20px;
  font-weight: bold;
  color: white;
  background-color: #58cac5;
  border: none;
  border-radius: 20px;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 10px;
  padding: 10px 20px;
  /* Ajuste del relleno */
}

.boton_inicio:hover {
  background-color: #4db0ab;
}

.botones-container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  height: 75vh;
  margin-top: 10px;
  margin-bottom: 10px;
}

.mio {
  justify-content: center;
  text-align: center;
  align-items: center;
  color: blue;
  margin: 0 auto;
}

/* Estilos para el contenedor principal */
.contenedoralineados {
  display: flex;
  /* Establece el contenedor como un flex container */
  justify-content: space-between;
  /* Distribuye los elementos a lo largo del contenedor, dejando espacio entre ellos */
}

/* Estilos para los elementos dentro de contenedoralineados */
.leftcolumn,
.rightcolumn {
  width: 48%;
  display: flex;
  flex-direction: column;
}

.leftcolumn {
  align-items: flex-end;
}

.rightcolumn {
  align-items: flex-start;
}

.campo_formulario {
  height: 2rem;
  padding-left: 0.5rem;
  background-color: var(--color3);
  padding-bottom: 0.2rem;
  width: 30em;
}

.campo_formulario:focus {
  background-color: var(--color3);
  /* Cambia el color de fondo cuando el input está seleccionado */
}

.fulldebajo {
  width: 67%;
  /* Establece el ancho del contenedor al 60% de la pantalla */
  margin: 0 auto;
  /* Centra el contenedor horizontalmente */
  text-align: left;
  /* Centra el contenido dentro del contenedor */
}

.titulo {
  margin-top: 20px;
  margin-bottom: 50px;
  color: var(--colorFuenteS);
  font-size: 1.8rem;
  font-weight: 400;
}

.estilo_header {
  background-color: var(--color-primario);
  color: var(--colorFuenteS);
  text-align: center;
  padding: 10px;
}

.header {
  background-color: var(--color-primario);
  /* Color de fondo azul */
  color: var(--colorFuenteP);
  /* Color de texto blanco */
  padding: 10px 0;
  /* Espaciado interno */
  text-align: center;
  /* Centrar el texto */
  font-size: 2rem;
}

/* Estilos para el menú de navegación */
.navbar {
  background-color: var(--color-primario);
  /* Color de fondo gris claro */
  padding: 10px 0;
  /* Espaciado interno */
}

.navbar-nav .nav-link {
  color: var(--colorFuenteP);
  /* Color de enlaces */
  padding: 10px 20px;
  /* Espaciado entre enlaces */
}

@keyframes pulse {
  0% {
    transform: scale(1);
    opacity: 1;
  }

  100% {
    transform: scale(1.05);
    opacity: 0.7;
  }
}

/* Aplicar animación a elementos .nav-item que no son dropdown */
.navbar-nav > .nav-item:not(.dropdown):hover,
.dropdown:hover .nav-link {
  animation-name: pulse;
  animation-duration: 0.3s;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
  /* Mantener el último estado de la animación */
  transform: scale(1.05);
  color: var(--colorFuenteP);
}

/* Estilo para dropdown */
.dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-menu {
  display: none;
  background-color: var(--color-primario);
  /* Color de fondo azul */
}

.dropdown-menu .dropdown-item {
  color: var(--colorFuenteP);
}

.dropdown-menu .dropdown-item:hover {
  background-color: var(--color-secundario);
  /* Color de fondo azul */
  color: var(--colorFuenteP);
}

/* Estilos adicionales para elementos activos o en hover */
.navbar-nav .nav-item.active .nav-link,
.navbar-nav .nav-item:hover .nav-link {
  background-color: var(--color-secundario);
  /* Color de fondo azul */
  color: var(--colorFuenteP);
  /* Color de texto blanco */
  border-radius: 5px;
  /* Bordes redondeados */
}


/* Estilos para el footer */
footer {
  background-color: var(--color-primario);
  /* Color de fondo azul */
  color: var(--colorFuenteP);
  /* Color de texto blanco */
  padding: 10px 10px;
  /* Espaciado interno */
  text-align: center;
  /* Centrar el texto */
  width: 100%;
  /* Ancho completo */
  bottom: 0;
  /* Alineado al fondo */
  left: 0;
  /* Alineado a la izquierda */
  margin-top: 20px;
}

/* centrado */
.centrado {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

.color-paginacion {
  background-color: var(--color-secundario);
  color: var(--colorFuenteP);
}

.color-paginacion-botones {
  background-color: var(--color-primario);
  color: var(--colorFuenteP);
}

/* Estilo para la página activa */
.pagination .page-item.active .page-link {
  background-color: var(--color-primario);
  color: var(--colorFuenteP);
  border-color: var(--colorFuenteP);
}

.pagination .page-item .page-link:hover {
  background-color: var(--color-primario); 
  color: var(--colorFuenteP);
}

.pagination .page-item.disabled .page-link[aria-label="Previous"],
.pagination .page-item.disabled .page-link[aria-label="Next"] {
  background-color: var(--color-secundario);
  /* Reemplaza 'your-color-here' con el color deseado */
  color: var(--colorFuenteP);
}
</style>