<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD laratest</title>

        <!-- Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <h1>To Do List</h1>
                    
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                        {{session()->get('message')}}
                         </div>
                    @endif
                   
                    <a href="todo/create" class="btn btn-info">Add New</a>

                    <table class="table table-striped table-hover ">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Body</th>
                          <th>Created at</th>
                          <th>Updated at</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td><a href="/todo/{{$task->id}}"><?php echo substr($task->body, 0, 10); ?></a></td>
                                <td>{{$task->created_at->diffforHumans()}}</td>
                                <td>{{$task->updated_at->diffforHumans()}}</td>
                                <td><a href="/todo/{{$task->id}}/edit">Edit</a></td>
                                <td>
                                    <form action="/todo/{{$task->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" >HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </body>
</html>
