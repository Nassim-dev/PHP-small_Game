<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://api.fontshare.com/css?f[]=sentient@200,201,300,301,400,401,500,501,700,701&display=swap" rel="stylesheet">
    <title>Small Game - Fight</title>
    <style>
    body {
        font-family: 'Sentient', serif;
        color: black;
    }

    h1 {
        text-align: center;
    }

    .container {
        height: 60vh;
        display: flex;
        flex-flow: row wrap;
        justify-content: space-around;
        align-items: center;
    }

    button {
        font-family: 'Sentient', serif;
        background-color: navy;
        color: white;
        border: solid navy 2px;
    }
    </style>
</head>

<body>
    <h1>Fighting Club</h1>
    <div class="container">
        <div class="joueur">
            <label for="name1">Joueur 1</label>
            <input type="text" id="name1" placeholder="Entrez votre pseudo">
        </div>
        <div class="joueur">
            <label for="name2">Joueur 2</label>
            <input type="text" id="name2" placeholder="Entrez votre pseudo">
        </div>
    </div>
</body>
</html>