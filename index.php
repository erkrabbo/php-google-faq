<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <header>
        <div class="d-flex justify-content-between">
            <h1>GULUGULU</h1>
            <h3>sezione menù</h3>
        </div>
        <nav>
            <ul class="d-flex m-0">
                <li><a href="#">Introduzione</a></li>
                <li><a href="#">Norme sulla privacy</a></li>
                <li><a href="#">Termini di servizio</a></li>
                <li><a href="#">Tecnologie</a></li>
                <li class="active"><a href="#">Domande frequenti</a></li>
            </ul>
        </nav>
    </header>
    <section class="container">
        <?php include('faq.php')?>
    </section>
    <footer>
        <div class="container d-flex align-items-center justify-content-between">
            <ul>
                <li><a href="#">Google</a></li>
                <li><a href="#">Tutto su google</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Termini</a></li>
            </ul>
            <div class="d-flex">
                <span>icona</span>
                <select name="lingua" id="lingua">
                    <option value="1">Italiano</option>
                    <option value="1">Italiano</option>
                    <option value="1">Italiano</option>
                    <option value="1">Italiano</option>
                    <option value="1">Italiano</option>
                    <option value="1">Italiano</option>
                    <option value="1">Italiano</option>
                    <option value="1">Italiano</option>
                </select>
            </div>
        </div>
    </footer>
</body>
</html>