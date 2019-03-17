<?php
    header("Content-Type: text/html; charset=UTF-8");
    session_start();
    session_destroy();
    echo "<script>window.location.href = 'index.html';</script>";
?>