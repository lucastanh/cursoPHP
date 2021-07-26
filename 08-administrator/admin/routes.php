<?php 

if(resolve('/admin')) {
    render('admin', 'admin/home');
} elseif (resolve('/admin/pages')) {
    render('admin', 'admin/pages');
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}
