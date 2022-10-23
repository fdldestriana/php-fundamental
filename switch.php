<?php

$role = "guest";

switch($role) {
    case "admin":
        echo "halo admin";
        break;
    case "moderator":
        echo "halo moderator";
        break;
    case "editor":
        echo "halo editor";
        break;
    case "guest":
        echo "halo guest";
        break;
    default:
        echo "Halo rakyat jelata";
}