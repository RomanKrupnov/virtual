<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta http-equiv="Refresh" content="90"/> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <title>Edit Favorites Algo Json</title>
</head>
<body>
<?php
$test = 'calculators.json';
?>
<header>
    <ul class="disp-flex">
        <li>
            <div class="dropdown mr-1">
                <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset"
                        data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                    Algo
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/234-rvn-kawpow?utf8=%E2%9C%93&hr=68.0&p=750&fee=2&cost=0.05%2C05&hcost=0.0&commit=Calculate"
                       target="_blank">RVN</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/300-nim-argon2d-nim?utf8=%E2%9C%93&hr=1170&p=650&fee=2&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">Nim</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/325-xgm-equihash-150-5?utf8=%E2%9C%93&hr=105&p=750&fee=2&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">GRIMM</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/175-xzc-mtp?utf8=%E2%9C%93&hr=10.5&p=750&fee=2&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">XZC</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/287-zel-zelhash?utf8=%E2%9C%93&hr=157&p=820&fee=2&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">ZEL</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/293-grin-cuckaroom29?utf8=%E2%9C%93&hr=15&p=650.0&fee=2.0&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">GRIN-29</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/299-grin-cuckatoo31?utf8=%E2%9C%93&hr=3.8&p=620&fee=2&cost=0.05&hcost=0.0&commit=Calculate">
                        GRIN-31</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/324-grin-cuckatoo32?utf8=%E2%9C%93&hr=1.8&p=750.0&fee=2.0&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">GRIN-32</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/322-mwc-cuckarood29?utf8=%E2%9C%93&hr=26&p=650&fee=2&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">MWC-29</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/323-mwc-cuckatoo31?utf8=%E2%9C%93&hr=3.8&p=650&fee=2&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">MWC-31</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/301-xwp-cuckaroo29s?utf8=%E2%9C%93&hr=26&p=650&fee=2&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">Swap</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/329-ctxc-cuckoocyclecortex?utf8=%E2%9C%93&hr=6.7&p=550.0&fee=5.0&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">Cortex</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/294-beam-beamhashii?utf8=%E2%9C%93&hr=160.0&p=800&fee=1.0&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">BEAM</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/151-eth-ethash?utf8=%E2%9C%93&hr=248&p=890&fee=1.0&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">ETH-AMD</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/coins/151-eth-ethash?utf8=%E2%9C%93&hr=122.4&p=550.0&fee=1.0&cost=0.05&hcost=0.0&commit=Calculate"
                       target="_blank">ETH-Nvidia</a>

                </div>
            </div>
        </li>
        <li>
            <div class="dropdown mr-1">
                <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset"
                        data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                    Card
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                    <a class="dropdown-item"
                       href="https://whattomine.com/gpus/35-nvidia-geforce-gtx-1080"
                       target="_blank">Nvidia 1080</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/gpus/32-nvidia-geforce-gtx-1060"
                       target="_blank">Nvidia 1060</a>
                    <a class="dropdown-item"
                       href="https://whattomine.com/gpus/27-amd-radeon-rx-580"
                       target="_blank">AMD 580</a>
                </div>
            </div>
        </li>
        <li>
            <div class="dropdown mr-1">
                <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset"
                        data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" data-offset="10,20">Menu
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                    <a class="dropdown-item"
                       href="index.php"
                       target="_blank">home</a>
                    <a class="dropdown-item"
                       href="searchCoin.php"
                       target="_blank">Search Coin</a>
                    <form method="post">
                        <input type="submit" name="load" id="load" class="dropdown-item" value="Update Json">
                    </form>
                    <a class="dropdown-item"
                       href="editAlgoJson.php"
                       target="_blank">Edit Algo Json</a>
                    <a class="dropdown-item"
                       href="editFavoritesJson.php"
                       target="_blank">Edit Favorites Algo Json</a>
                </div>

            </div>
        </li>
    </ul>
</header>
<div class="container">
    <?php
    function saveJson(){
        $url='favoritesAlgo.json';
        $text= $_POST["textFavoritesJson"];
        file_put_contents($url,$text);
        echo("<meta http-equiv='refresh' content='1'>");
    }
    $urlAlgo = 'favoritesAlgo.json';
    $dataAlgo = file_get_contents($urlAlgo);
    if (array_key_exists('save', $_POST)) {
        saveJson();
    }?>
    <form method="post">
        <textarea rows="12" cols="100" name="textFavoritesJson"><?php echo $dataAlgo;?></textarea>
        <input type="submit" name="save" id="save" value="Save Changes">
    </form>
</div>
</body>
</html>