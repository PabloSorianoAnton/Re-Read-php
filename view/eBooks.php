<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Estilos enlazados-->
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

<div class="logo">
  Re-Read  
</div>

<div class="header">
  <h1>Re-Read</h1>
  <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
</div>

<div class="row">
  
  <div class="column left">
    <div class="topnav">
      <a href="../index.php">Re-Read</a>
      <a href="libros.php">Libros</a>
      <a href="eBooks.php">eBooks</a>
    </div>
    <h3>Toda la actualidad en eBook</h3>
    <!---eBooks con descripcion-->
     <div class="ebook">
      <a href="https://www.casadellibro.com/libro-cell/9788483465219/1162268"><img src="../img/ebook1.jpeg" alt="eBook 1">
      <div>A través de los teléfonos móviles se envía un mensaje que convierte a todos en esclavos asesinos...</div>
      </a>
    </div>
    <!-- <div class="ebook">
      <a href="https://www.casadellibro.com/libro-el-ciclo-del-hombre-lobo/9788499081281/1819674"><img src="../img/ebook2.jpeg" alt="eBook 2">
      <div>Una escalofriante revisión del mito del hombre lobo por el rey de la literatura de terror...</div>
      </a>
    </div>
    <div class="ebook">
      <a href="https://www.casadellibro.com/libro-el-resplandor/9788490328729/2197218"><img src="../img/ebook3.jpeg" alt="eBook 3">
      <div>Esa es la palabra que Danny había visto en el espejo. Y, aunque no sabía leer, entendió que era un mensaje de horror...</div>
      </a>
    </div>
    <div class="ebook">
      <a href="https://www.casadellibro.com/libro-doctor-sueno/9788401354809/2196951"><img src="../img/ebook4.jpeg" alt="eBook 3">
      <div>Una novela que entusiasmará a los millones de lectores de El resplandor y que encantará...</div>
      </a>
    </div> -->
  </div>

  <?php
  // conexiona la base de datos
  include '../services/connection.php';

  // seleccion y muestra de datos de la base de datos
  $result = mysqli_query($conn, "SELECT Books.Description, Books.img, Books.Title FROM Books WHERE eBook !='0'");

  if (!empty($result) && mysqli_num_rows($result) > 0) {
    // datos de salida de cada fila (fila = row)
    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='ebook'>";
      // añadimos la imagen a la pagina con la etiqueta img de html
      echo "<img src=../img/".$row['img']." alt='".$row['Title']."'>";
      // añadimos el titulo a la pagina con la etiqueta h2 de html 
      // echo "<div class='desc'".$row['Title']."</div>;
      echo "</div>";
    }
  }

  ?>
  
  <div class="column right">
    <h2>Side</h2>
    <p>Cien años de soledad.</p>
    <p>Crónica de una muerte anunciada.</p>
    <p>El otoño del patriarca.</p>
    <p>El general en su laberinto.</p>
  </div>
</div>
  
</body>
</html>