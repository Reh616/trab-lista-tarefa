<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList | Edição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style type="text/css">
        body {
            text-align:center;
            background-color: #E2D5DE;
        }
        .titulo{
            font-size: 2.4em;
            text-align: center;
            margin-top: 2em;
            font-weight: 500;
            color: #333;
        }
        .alerta{
            text-align: center;
            margin-top: 1em;
            font-weight: 500;
            color:#333;
            font-style: italic;
        }
        form{
            width: 50%;
            margin: 0 auto;
            margin-top: 1em;
            margin-bottom: 1em;
            
        }
        input{
            width: 100%;
            margin-top: 1em;
            margin-bottom: .2em;
            padding: 0.5em;
            border-radius: 0.5em;
            border: none;
        }
        input[type="submit"]{
            background-color: #555;
            color: #fff;
            font-weight: 500;
            font-size: 1.2em;
            cursor: pointer;
            margin-bottom: 1em;
        }
        a{
            cursor: pointer;
            color: rgb(10, 10, 10);
            font-size: 1em;
        }
    </style>
</head>
<body>
    <p class="titulo">Editar Tarefa</p>
        <x-alert/> 
    <p class="alerta">
        Máximo de 255 caracteres. 
    </p>
    <form action="/update" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
        <input type="text" name="title" value="{{$todo->title}}" id="formGroupExampleInput">
        <input style="display:none;" type="number" name="id" value="{{$todo->id}}">
        <input type="submit" value="Salvar"/>
        
    </form>
    
    <br>
    <a href="/index"><button>Voltar</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>