const http = require('http');

const server = http.createServer((req, res) => {
    console.log('METHOD: ', req.method);
    console.log('HEADERS: ', req.headers);
    console.log('HTTP VERSION: ', req.httpVersion);
    console.log('+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+');

    // res.end('Hi');

    if(req.method === "POST") {
        res.writeHead(201, {
            'Content-type': 'application/json'
        })

        res.write('{"message": "Cadastro efetuado com sucesso!"}')
    }

    if(req.method === "GET") {
        res.writeHead(200, {
            'Content-Type': 'text/html'
        })

        res.write(`
                <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <h1>Response</h1>
            </body>
            </html>
        `)
    }

    res.end();
});

server.listen(3001, () => {
    console.log('Server working!')
});