<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList | Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style type="text/css">
        .mb-3{
            font-size:2em;
            text-align:center;
        }
        a{
            background:transparent;
            text-decoration: underline;
            cursor: pointer;
            justify-content:start;
            color: rgb(10, 10, 10);
            font-size: 1.5em;
        }
       



    </style>
</head>
<body>
   
    <section class="vh-100" style="background-color: #e2d5de;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-5">

            <h6 class="mb-3">Lista de Tarefas</h6>
            <p class="alerta">
                <x-alert />
            </p>
            <form class=" mb-4">
              <div class="form-outline flex-fill">
                  </div>
                  <a href="/create">
                     Criar 
                  </a>
            </form>
            @foreach ($todos as $todo)
            <ul class="list-group mb-0">
            @if($todo->completed)
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                <div class="d-flex align-items-center">
                <span style="text-decoration:line-through ">
                                        {{$todo->title}}
                </div>
            
                <div class="d-flex align-items-center">
                <a href="{{asset('/' . $todo->id . '/edit')}}" class="btn btn-sm btn-primary me-2">Editar</a>
                <a href="{{asset('/' . $todo->id . '/completed')}}" class="btn btn-sm btn-success me-2">Concluir</a>
                <a href="{{asset('/' . $todo->id . '/delete')}}" class="btn btn-sm btn-danger">Excluir</a>
              </li>
              @else
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                <div class="d-flex align-items-center">
                
                                        {{$todo->title}}
                </div>
            
                <div class="d-flex align-items-center">
                  
                <a href="{{asset('/' . $todo->id . '/edit')}}" class="btn btn-sm btn-primary me-2">Editar</a>
                <a href="{{asset('/' . $todo->id . '/completed')}}" class="btn btn-sm btn-success me-2">Concluir</a>
                <a href="{{asset('/' . $todo->id . '/delete')}}" class="btn btn-sm btn-danger">Excluir</a>
              </li>
            @endif
              
            </ul>
            @endforeach

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>