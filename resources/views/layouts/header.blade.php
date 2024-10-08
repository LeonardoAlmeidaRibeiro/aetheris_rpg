<!DOCTYPE html>
<html lang="en"> 
<head>

  <title>Aetheris  RPG</title>
  <meta charset="utf-8">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- CDN link for social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ url ('assets/css/site_css.css') }}" rel="stylesheet" type="text/css" />

<style>
body {
  background-color: #202020;
}
</style>

<style> 
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }

  #more {display: none;}

  html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: white;
}

.btn {
  border: 2px #ffdc6c;
  border-radius: 5px;
  background-color: #ffdc6c;
  color: black;
  padding: 8px 10px;
  font-size: 16px;
  cursor: pointer;
}
body {
        color: white; /* Define a cor branca para todo o texto */
        font-family: Arial, sans-serif; /* Opcional: define a família de fontes */
        margin: 0;
        padding: 0;
    }

    .content {
        flex: 1;
    }


  </style>

  <!-- iNSERT THE JAVASCRIPT CODE HERE -->
  <script>
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
  </script>
</head>
