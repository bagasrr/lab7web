<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Css/index.css" />
    <title>Web 2 Codeigniter</title>
</head>

<body>
    <div class="page-container">
        <div class="header">
            <h1>Web 2 Codeigniter</h1>
        </div>

        <?= $this->include('Template/Navbar'); ?>

        <div class="content-container">
            <div class="left-container">
                <?= $this->renderSection('content') ?>
            </div>
            <div class="right-container">
                <ul class="widget-header">
                    <h3>Widget Header</h3>
                    <li>Widget Link</li>
                    <li>Widget Link</li>
                    <li>Widget Link</li>
                    <li>Widget Link</li>
                    <li>Widget Link</li>
                </ul>
                <div class="widget-header">
                    <h3>Widget Header</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sequi ab temporibus,
                        perferendis nulla
                        nesciunt beatae blanditiis omnis rerum placeat tempore aut! Molestiae esse voluptatem
                        consequatur
                        aliquam
                        quia placeat magni
                        expedita exercitationem, dolores rerum aspernatur sequi assumenda ab rem, provident fugiat
                        excepturi
                        alias
                        dolor quisquam officiis facilis omnis, labore commodi!
                    </p>
                </div>
            </div>
        </div>
    </div>

    </div>
    <footer>&#169; Bagas Ramadhan Rusnadi TI.21.C5</footer>
</body>

</html>