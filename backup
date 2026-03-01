<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Centro de Descargas</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<style>
*{box-sizing:border-box;}

body{
    margin:0;
    font-family:'Inter', sans-serif;
    background:#0b0f19;
    color:#e5e7eb;
}

/* ===== LOCK SCREEN ===== */
.lock-screen{
    position:fixed;
    inset:0;
    background:#0b0f19;
    display:flex;
    justify-content:center;
    align-items:center;
    z-index:999;
    animation:fadeIn 0.5s ease;
}

.lock-box{
    background:#111827;
    padding:40px;
    border-radius:16px;
    width:320px;
    text-align:center;
    border:1px solid #1f2937;
    box-shadow:0 10px 30px rgba(0,0,0,0.4);
}

.lock-box h2{
    margin-top:0;
}

.lock-box input{
    width:100%;
    padding:12px;
    margin-top:15px;
    border-radius:8px;
    border:1px solid #1f2937;
    background:#0b0f19;
    color:white;
}

.lock-box button{
    margin-top:15px;
    width:100%;
    padding:10px;
    border:none;
    border-radius:8px;
    background:#2563eb;
    color:white;
    cursor:pointer;
    transition:0.2s;
}

.lock-box button:hover{
    background:#1d4ed8;
}

.error{
    color:#ef4444;
    font-size:13px;
    margin-top:10px;
}

@keyframes fadeIn{
    from{opacity:0;}
    to{opacity:1;}
}

/* ===== MAIN CONTENT ===== */
#mainContent{
    display:none;
    animation:fadeMain 0.6s ease;
}

@keyframes fadeMain{
    from{opacity:0; transform:translateY(10px);}
    to{opacity:1; transform:translateY(0);}
}

header{
    background:#111827;
    padding:18px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    border-bottom:1px solid #1f2937;
}

header h1{
    margin:0;
    font-size:20px;
}

.container{
    max-width:1100px;
    margin:auto;
    padding:30px;
}

.search-box input{
    width:100%;
    padding:12px;
    background:#111827;
    border:1px solid #1f2937;
    border-radius:10px;
    color:white;
    margin-bottom:20px;
}

.table-wrapper{
    background:#111827;
    border-radius:14px;
    overflow:hidden;
    border:1px solid #1f2937;
}

table{
    width:100%;
    border-collapse:collapse;
}

thead{
    background:#1f2937;
}

th, td{
    padding:16px;
    text-align:left;
}

td{
    border-top:1px solid #1f2937;
}

tr:hover{
    background:#161b2e;
}

button{
    background:#2563eb;
    border:none;
    padding:8px 14px;
    border-radius:8px;
    color:white;
    cursor:pointer;
    transition:0.2s;
}

button:hover{
    background:#1d4ed8;
}

.back-btn{
    background:#374151;
}

.folder{ color:#fbbf24; }
.file{ color:#60a5fa; }
</style>
</head>
<body>

<!-- LOCK SCREEN -->
<div class="lock-screen" id="lockScreen">
    <div class="lock-box">
        <h2>🔒 Acceso Privado</h2>
        <input type="password" id="passwordInput" placeholder="Ingresa la contraseña">
        <button onclick="checkPassword()">Desbloquear</button>
        <div class="error" id="errorMsg"></div>
    </div>
</div>

<!-- MAIN CONTENT -->
<div id="mainContent">

<header>
    <h1>📂 Centro de Descargas</h1>
    <button class="back-btn" onclick="goBack()">⬅ Volver</button>
</header>

<div class="container">

<div class="search-box">
    <input type="text" id="search" placeholder="Buscar archivo o carpeta...">
</div>

<div class="table-wrapper">
<table>
<thead>
<tr>
<th>Nombre</th>
<th>Tipo</th>
<th>Acción</th>
</tr>
</thead>
<tbody id="fileTable"></tbody>
</table>
</div>

</div>

</div>

<script>
/* ===== PASSWORD CONFIG ===== */
let PAGE_PASSWORD = "1234"; // ← CAMBIA AQUÍ TU CONTRASEÑA

function checkPassword(){
    let input = document.getElementById("passwordInput").value;
    if(input === PAGE_PASSWORD){
        document.getElementById("lockScreen").style.display="none";
        document.getElementById("mainContent").style.display="block";
    }else{
        document.getElementById("errorMsg").textContent="Contraseña incorrecta";
    }
}

/* ===== FILE SYSTEM ===== */
let fileSystem = {
    root: {
        folders: {
            "Proyectos": {
                folders: {},
                files: [
                    {
                        name:"diseño_web.zip",
                        type:"ZIP",
                        link:"https://example.com/archivo1.zip"
                    }
                ]
            }
        },
        files: [
            {
                name:"Manual.pdf",
                type:"PDF",
                link:"https://example.com/manual.pdf"
            }
        ]
    }
};

let currentPath = ["root"];

function getCurrentFolder(){
    let folder = fileSystem;
    for(let p of currentPath){
        folder = folder[p];
    }
    return folder;
}

function render(){
    let table = document.getElementById("fileTable");
    let search = document.getElementById("search").value.toLowerCase();
    table.innerHTML="";
    let folder = getCurrentFolder();

    for(let name in folder.folders){
        if(name.toLowerCase().includes(search)){
            table.innerHTML += `
            <tr>
                <td class="folder">📁 ${name}</td>
                <td>Carpeta</td>
                <td>
                    <button onclick="openFolder('${name}')">Abrir</button>
                </td>
            </tr>
            `;
        }
    }

    folder.files
    .filter(f => f.name.toLowerCase().includes(search))
    .forEach(file=>{
        table.innerHTML += `
        <tr>
            <td class="file">📄 ${file.name}</td>
            <td>${file.type}</td>
            <td>
                <a href="${file.link}" target="_blank">
                    <button>Descargar</button>
                </a>
            </td>
        </tr>
        `;
    });
}

function openFolder(name){
    currentPath.push("folders");
    currentPath.push(name);
    render();
}

function goBack(){
    if(currentPath.length > 1){
        currentPath.pop();
        currentPath.pop();
        render();
    }
}

document.getElementById("search").addEventListener("input", render);

render();
</script>

</body>
</html>
