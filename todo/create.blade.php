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
                    <h1>Create new item</h1>
                    <a href="/todo" class="btn btn-info">Back</a>
                    <br><br>
                    <form class="form-horizontal" action="/todo" method="post">
                    {{csrf_field()}}
                      <fieldset>
                        <div class="form-group">
										      <label for="textArea" class="col-lg-2 control-label">Body</label>
										      <div class="col-lg-10">
										        <textarea class="form-control" name="body" rows="3" id="textArea"></textarea>
										      </div>
										    </div>
                       		
                     		<div class="form-group">
										      <div class="col-lg-10 col-lg-offset-2">
										        <button type="reset" class="btn btn-default">Cancel</button>
										        <button type="submit" class="btn btn-primary">Submit</button>
										      </div>
										    </div>
                      </fieldset>
                    </form>
                    @include('todo.partials.errors')
                </div>
            </div>
        </div>
    </body>
</html>
