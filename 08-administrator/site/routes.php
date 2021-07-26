<?php 

if(resolve('/')) {
    render('site', 'site/home');
} elseif (resolve('/contato')) {
    render('site', 'site/contato');
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}
