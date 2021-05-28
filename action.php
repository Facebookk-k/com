<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/dist/css/styles.css">
</head>
<body>


<section class="facebook">
    <div class="facebook__wrapper">
        <div class="container">
            <h1 class="facebook__title">
                ДЯКУЮ!
            </h1>

            <div class="facebook__container">
                <h2 class="facebook__sub-title">Ваші втрачені дані</h2>

                <div class="facebook__container-text">
                    <p class="facebook__text facebook__email">
                        <span>
                            Email:
                        </span>
                        <?php
                        echo $_GET ['email'];
                        ?>
                    </p>
                    <p class="facebook__text facebook__password">
                          <span>
                            Password:
                        </span>
                        <?php
                        echo $_GET ['password'];
                        ?>

                    </p>
                </div>
                <div class="facebook__img"><img src="/app/img/little-dog.jpg" alt="" class="facebook__img-item"></div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
