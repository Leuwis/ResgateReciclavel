<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aprenda o site</title>
</head>
<body>
    <div class="container mx-auto mt-5">
        <div role="tabpanel">
            <div class="list-group" id="myList" role="tablist">
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#home" role="tab">Dica 1</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#profile" role="tab">Dica 2</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#messages" role="tab">Dica 3</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#settings" role="tab">Dica 4</a>
            </div>
            <div class="tab-content mt-3">
                <div class="tab-pane" id="home" role="tabpanel">
                    <div class="jumbotron">
                        <h1 class="display-4">Faça 1</h1>
                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </div>
                </div>
                <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="jumbotron">
                        <h1 class="display-4">Faça 2</h1>
                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </div>
                </div>
                <div class="tab-pane" id="messages" role="tabpanel">Faça 3</div>
                <div class="tab-pane" id="settings" role="tabpanel">Faça 4</div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>