<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste api</title>
</head>
<body>
    <h1>Testando consumo de api</h1>
    <p id="resultado"></p>
</body>
</html>
<script>
    //GET - Pega dados do servidor
    //POST - Manda dados para servidor
    //PUT - Atualiza dados do servidor
    //DELETE - Deleta dados do servidor

    const url = '';
    const username = '';
    const password = '';

    const encodedCredentials = btoa(`${username}:${password}`);

    //corpo da requisição GET
    // const requestOptions = {
    //     method: 'GET',
    //     headers: {
    //         'Authorization': Basic ${encodedCredentials}
    //     }
    // }

    //corpo requisição POST
    const dataToSend = {
        contato: '12345',
        localizacao: 'araçatuba'
    }

    const requestOptions = {
        method: 'POST',
        headers: {
            'Authorization': `Basic ${encodedCredentials}`,
            'Content-type': 'application/json'
        },
        body: JSON.stringify(dataToSend)
    }
    /////////////////////////////
    const resultElement = document.getElementById('resultado')

    //montando a requisição
    fetch(url, requestOptions)
    .then(response => response.json())
    .then(data => {
        resultElement.textContent = JSON.stringify(data)
    })
    .catch(error =>{
        console.log(error)
    })

//oi
</script> 