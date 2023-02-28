<?php
// K
include 'koneksi.php';
$page = '';
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}

switch ($page) {
  case 'home':
    include 'view/home.php';
    break;

  case 'contact':
    include 'view/contact.php';
    break;

  case 'about':
    include 'view/about.php';
    break;

  case 'kategori':
    include 'view/kategori.php';
    break;

  case 'kategori-tambah':
    include 'view/kategori-tambah.php';
    break;


  case 'kategori-edit':
    include 'view/kategori-edit.php';
    break;

  case 'artikel':
    include 'view/artikel.php';
    break;

  default:
    include 'view/home.php';
    break;
}
