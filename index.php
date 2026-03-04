<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Centro de Descarga de Imágenes</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<style>
body{
    margin:0;
    font-family:'Inter',sans-serif;
    background:#0b0f19;
    color:#e5e7eb;
}

/* ===== NAVBAR ===== */

nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 30px;
    background:#111827;
    border-bottom:1px solid #1f2937;
}

.logo{
    font-weight:600;
    font-size:18px;
}

.menu{
    display:flex;
    gap:20px;
}

.menu a{
    text-decoration:none;
    color:#9ca3af;
    padding:8px 14px;
    border-radius:8px;
    transition:0.3s;
}

.menu a:hover{
    background:#1f2937;
    color:white;
}

/* Página activa */
.menu a.active{
    background:#2563eb;
    color:white;
}

/* ===== CONTENIDO ===== */

.container{
    max-width:1200px;
    margin:auto;
    padding:30px;
}

.search-box{
    margin-bottom:25px;
}

.search-box input{
    width:100%;
    padding:12px;
    background:#111827;
    border:1px solid #1f2937;
    border-radius:10px;
    color:white;
}

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(260px,1fr));
    gap:20px;
}

.card{
    background:#111827;
    border:1px solid #1f2937;
    border-radius:16px;
    overflow:hidden;
    transition:0.3s ease;
    opacity:0;
    transform:translateY(20px);
    animation:fadeIn 0.6s forwards;
}

.card:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,0.4);
}

.card img{
    width:100%;
    height:180px;
    object-fit:cover;
}

.card-content{
    padding:15px;
}

.card h4{
    margin:0 0 10px 0;
    font-weight:500;
}

button{
    width:100%;
    background:#2563eb;
    border:none;
    padding:10px;
    border-radius:8px;
    color:white;
    cursor:pointer;
    transition:0.2s;
}

button:hover{
    background:#1d4ed8;
}

@keyframes fadeIn{
    to{
        opacity:1;
        transform:translateY(0);
    }
}
</style>
</head>
<body>

<!-- ===== NAVBAR ===== -->

<nav>
    <div class="logo">🖼 ImageCenter</div>
    <div class="menu">
        <a href="index.html" class="active">Inicio</a>
        <a href="#">Categorías</a>
        <a href="#">Populares</a>
        <a href="#">Contacto</a>
    </div>
</nav>

<!-- ===== CONTENIDO ===== -->

<div class="container">

<div class="search-box">
<input type="text" id="search" placeholder="Buscar imagen...">
</div>

<div class="grid" id="gallery"></div>

</div>

<script>
const imagenes = [
{
    nombre: "Wallpaper Cyberpunk",
    preview: "https://picsum.photos/300/200?random=1",
    link: "https://picsum.photos/1920/1080?random=1"
},
{
    nombre: "Fondo Minimalista",
    preview: "https://picsum.photos/300/200?random=2",
    link: "https://picsum.photos/1920/1080?random=2"
},
{
    nombre: "Imagen Abstracta",
    preview: "https://picsum.photos/300/200?random=3",
    link: "https://picsum.photos/1920/1080?random=3"
}
];

const gallery = document.getElementById("gallery");

imagenes.forEach((img, index) => {
    const card = document.createElement("div");
    card.className = "card";
    card.style.animationDelay = (index * 0.1) + "s";

    card.innerHTML = `
        <img src="${img.preview}" alt="">
        <div class="card-content">
            <h4>${img.nombre}</h4>
            <a href="${img.link}" target="_blank">
                <button>Descargar</button>
            </a>
        </div>
    `;
    gallery.appendChild(card);
});

document.getElementById("search").addEventListener("input", function(){
    let value = this.value.toLowerCase();
    let cards = document.querySelectorAll(".card");
    cards.forEach(card=>{
        card.style.display = card.innerText.toLowerCase().includes(value) ? "" : "none";
    });
});
</script>

</body>
</html>
