<?php require_once '../templates/header.php';?>

<!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_default&stacked=h-->
<head>
    <title>Bootstrap Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    h2, p {
        margin: 0;
    }

    #container main
    {
        float:left;
        width:55%;
        padding: 0em 0.8em 2em 4em;
    }
    #container main p
    {
        margin: 0;
        text-align: center;
        font-size: 20px;

        border-left: 1px solid gray;
    }

    #container aside
    {
        float:right;
        width:45%;
        margin: 0;
          }
</style>

<div class="jumbotron text-center">
    <h1>Our Story</h1>
    <p><em>Please read about us!</em></p>
</div>
<main>

            <h2>Our Philosophy and Mission</h2>
            <p>Auctor urna nunc id cursus metus aliquam. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus. Interdum consectetur libero id faucibus nisl tincidunt. Gravida quis blandit turpis cursus. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Tortor id aliquet lectus proin. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus. Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. </p>

            <h2>Our Team of Experts</h2>
            <p>Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Malesuada proin libero nunc consequat interdum varius. Nullam ac tortor vitae purus faucibus. Amet est placerat in egestas erat imperdiet sed euismod. Volutpat blandit aliquam etiam erat. Nulla at volutpat diam ut venenatis. Pretium fusce id velit ut tortor. Lacinia at quis risus sed. In vitae turpis massa sed elementum tempus egestas sed sed. Tincidunt praesent semper feugiat nibh sed pulvinar proin gravida. Vel orci porta non pulvinar neque laoreet suspendisse interdum.</p>

            <h2>Materials We Use</h2>
            <p>Massa tincidunt dui ut ornare lectus sit. Tortor pretium viverra suspendisse potenti nullam ac tortor vitae purus. Imperdiet sed euismod nisi porta lorem. Sed viverra tellus in hac platea dictumst. Suspendisse potenti nullam ac tortor vitae purus. </p>

</main>

<aside>

    <img src="img/about.jpg" alt="Jewelley">

</aside
    <br>
          <?php require_once '../templates/footer.php';?>
