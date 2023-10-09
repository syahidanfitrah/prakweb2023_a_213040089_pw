<?php

require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
            alert('Delete Data Succeess!');
            document.location.href = 'index.php';
          </script>";
}