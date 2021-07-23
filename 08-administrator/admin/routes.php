<?php 

if(resolve('/admin')) {
    echo 'Administração';
} elseif (resolve('/admin/pages')) {
    echo 'Administração de páginas';
} else {
    echo 'Página não encontrada';
}
