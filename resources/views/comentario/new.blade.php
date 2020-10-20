<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css"
        integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg=="
        crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="container">
    <form class="form-horizontal" method="POST" action="{{ route('comentarios.store') }}">
        @csrf
        <fieldset>

            <!-- Form Name -->
            <legend>Comentario</legend>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h6 class="card-subtitle mb-8 text-muted"> </h6>
                    <p class="card-text"><div class="form-group">
                <label class="col-8 control-label" >ingrese opinión </label>
                <textarea name="comentario" rows="10" cols="50" class="form-control input-md"></textarea>
                
            </div></p>
                    <a href="#" class="card-link"></a>
                </div>
            </div>

            <!-- Text input-->
            

            <!-- Button -->
            <div class="form-group">
                <div class="col-md-4">
                    <button type="submit" id="" name="" class="btn btn-success">Enviar</button>
                </div>
            </div>

        </fieldset>
    </form>
    </div>
</body>

</html>