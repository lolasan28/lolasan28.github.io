<?php
$dir = "downloads/";
$files = [];

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file != "." && $file != "..") {
                $files[] = $file;
            }
        }
        closedir($dh);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Centro de Descargas</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
body{
    margin:0;
    font-family:'Inter',sans-serif;
    background:#0b0f19;
    color:#e5e7eb;
}

header{
    padding:20px 30px;
    background:#111827;
    border-bottom:1px solid #1f2937;
}

.container{
    max-width:1100px;
    margin:auto;
    padding:30px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:#111827;
    border-radius:14px;
    overflow:hidden;
    border:1px solid #1f2937;
}

th, td{
    padding:16px;
    text-align:left;
}

th{
    background:#1f2937;
    text-transform:uppercase;
    font-size:12px;
    color:#9ca3af;
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

.search-box{
    margin-bottom:20px;
}

.search-box input{
    width:100%;
    padding:12px;
    background:#111827;
    border:1px solid #1f2937;
    border-radius:10px;
    color:white;
}
</style>
</head>
<body>

<header>
<h2>📂 Centro de Descargas</h2>
</header>

<div class="container">

<div class="search-box">
<input type="text" id="search" placeholder="Buscar archivo...">
</div>

<table>
<thead>
<tr>
<th>Nombre</th>
<th>Tamaño</th>
<th>Descargar</th>
</tr>
</thead>
<tbody id="fileTable">

<?php foreach ($files as $file): 
    $size = filesize($dir.$file);
    $sizeMB = round($size / 1024 / 1024, 2);
?>
<tr>
<td>📄 <?php echo htmlspecialchars($file); ?></td>
<td><?php echo $sizeMB; ?> MB</td>
<td>
<a href="<?php echo $dir.$file; ?>" download>
<button>Descargar</button>
</a>
</td>
</tr>
<?php endforeach; ?>

</tbody>
</table>

</div>

<script>
document.getElementById("search").addEventListener("input", function(){
    let value = this.value.toLowerCase();
    let rows = document.querySelectorAll("#fileTable tr");
    rows.forEach(row=>{
        row.style.display = row.innerText.toLowerCase().includes(value) ? "" : "none";
    });
});
</script>

</body>
</html>
