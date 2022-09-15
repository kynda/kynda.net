<?php
/**
 * HTML Head Element
 *
 * @copright 2014 Joseph Hallenbeck
 */
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="/css/style.css" media="all" />
    <link rel="stylesheet" href="/vendors/components-font-awesome/css/all.css">
    <link href="/media/favicon.ico" rel="icon" type="image/x-icon">

    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    <script src="/vendors/bootstrap/js/tooltip.js"></script>

    <title>Kynda.net - The Works of Joe Hallenbeck</title>
</head>

<body>

    <div class="container">
        <div class="col-xs-12 text-right">
            <h1>Kynda.net</h1>

            <nav>
                <ul class="list-inline">
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="https://joehallenbeck.com"
                           target="_blank"
                           title="Ye Olde Blog">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="https://garden.joehallenbeck.com"
                           target="_blank"
                           title="Digital Garden">
                            <i class="fa-solid fa-worm"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="https://bowlich.com"
                           target="_blank"
                           title="Bowlich on Hacker's Town">
                            <i class="fa-brands fa-mastodon"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="http://damasca.net"
                           target="_blank"
                           title="The Old Damasca Forums">
                            <i class="fa-solid fa-shield-halved"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="https://vickiethewonderdog.com"
                           target="_blank"
                           title="Vickie the Wonder Dog">
                            <i class="fa-solid fa-paw"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="https://alpinearizona.com"
                           target="_blank"
                           title="Alpine Arizona">
                            <i class="fa-solid fa-mountain-sun"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="https://www.linkedin.com/in/joseph-hallenbeck"
                           target="_blank"
                           title="LinkedIn">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="https://github.com/Kynda"
                           target="_blank"
                           title="Github Account">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <?php if ($_SERVER["REMOTE_ADDR"] ===  "70.100.252.213"): ?>
            <nav>
                <ul class="list-inline">
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="https://time.kynda.net"
                           target="_blank"
                           title="TOK">
                            <i class="fa-solid fa-clock"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="https://tt-rss.kynda.net"
                           target="_blank"
                           title="RSS Reader">
                            <i class="fa-solid fa-square-rss"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="https://fastmail.com"
                           target="_blank"
                           title="E-mail">
                            <i class="fa-solid fa-inbox"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav>
                <ul class="list-inline">
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="http://192.168.1.1"
                           target="_blank"
                           title="Router">
                            <i class="fa-solid fa-network-wired"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="http://asgard.kynda.net"
                           target="_blank"
                           title="Asgard">
                            <i class="fa-solid fa-server"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="http://kynda.net"
                           target="_blank"
                           title="Kynda">
                            <i class="fa-solid fa-server"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav>
                <ul class="list-inline">
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="http://bogun.kynda.net"
                           target="_blank"
                           title="Bogun">
                            <i class="fa-solid fa-computer"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="http://behemoth.kynda.net"
                           target="_blank"
                           title="Behemoth">
                            <i class="fa-solid fa-computer"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav>
                <ul class="list-inline">
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="http://diemos.kynda.net"
                           target="_blank"
                           title="Diemos">
                            <i class="fa-solid fa-laptop"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="http://phobos.kynda.net"
                           target="_blank"
                           title="Phobos">
                            <i class="fa-solid fa-laptop"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="http://iounn.kynda.net"
                           target="_blank"
                           title="Iounn">
                            <i class="fa-solid fa-laptop"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="http://ponderosa.kynda.net"
                           target="_blank"
                           title="Ponderosa">
                            <i class="fa-solid fa-laptop"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav>
                <ul class="list-inline">
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="http://switch.kynda.net"
                           target="_blank"
                           title="Switch">
                            <i class="fa-solid fa-gamepad"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip"
                           data-placement="bottom"
                           href="#"
                           target="_blank"
                           title="Puk">
                            <i class="fa-solid fa-mobile"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <?php endif; ?>

        </div>
    </div>

    <script src="/js/main.js"></script>

</body>
</html>
