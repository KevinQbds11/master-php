<?php

session_start();

//CIERRO SESION
session_destroy();

echo $_SESSION['var_persistente'];