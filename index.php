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
    <title>Calculate</title>
</head>
<body>
<?php
require_once('vendor/autoload.php');
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$test = 'calculators.json';
error_reporting(E_ALL);
ini_set('display_errors', 1);

const DEBUG = 1; // константа которая либо запрешает либо разрешает логирование
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
    <ul class="disp-flex">
        <div class="row ">
            <?php
            /**
             * Функция логирования времени работы приложения
             * @param $time_start
             * @param $time_end
             */
            function timeLong($time_start,$time_end){
                $log = new Logger('time');
                $log->pushHandler(new StreamHandler('log/time.log', Logger::DEBUG));
                $log->debug($time_end - $time_start);
            }

            /**
             * Функция отслеживает выделенную память
             */
            function memoryUsage() {
                $log = new Logger('memory');
                $log->pushHandler(new StreamHandler('log/memory.log', Logger::DEBUG));
                $log->debug(memory_get_usage());
            }
            /**
             * Функция обновления Json файла
             */
            function loadFile()
            {
                $url = 'https://whattomine.com/calculators.json';
                $path = 'calculators.json';
                file_put_contents($path, file_get_contents($url));
            }

            /**
             * Функция удаления записи из избранных монет
             */
            function deleteJson()
            {
                $link = $_POST["url"];
                $url = 'favoritesAlgo.json';
                $file = file_get_contents($url);
                $data = json_decode($file, true);
                unset($file);
                foreach ($data as $index) {
                    if (in_array($link, $index)) {
                        unset($data[0]);
                        $result = json_encode($data);
                        file_put_contents($url, $result);
                    }
                }
            }

            /**
             * Функция парсера данных калькулятора
             * @param $p1
             * @param $p2
             * @param $p3
             * @return false|int|string
             */
            function parse($p1, $p2, $p3)
            {
                $num1 = strpos($p1, $p2);
                if (!$num1) return 0;
                $num2 = substr($p1, $num1);
                return substr($num2, 0, strpos($num2, $p3));
            }

            //Блок с распарсиванием алгоритмов
            $catalog = file_get_contents($test); //подключаем файл с базой монет
            $data2 = json_decode($catalog, true);//подключаем файл с базой монет
            $favoritesAlg = file_get_contents('favoritesAlgo.json'); //подключаем файл с избранными монетами
            $urlFavoritesAlg = json_decode($favoritesAlg, true);//подключаем файл с избранными монетами
            //Кнопка Удаления избранной монеты
            if (array_key_exists('del', $_POST)) {
                deleteJson();
            }
            //Кнопка обновления данных в Json
            if (array_key_exists('load', $_POST)) {
                loadFile();
            }
            foreach ($urlFavoritesAlg['favorites'] as $key) {
                $time_start = time(); //
                $link = file_get_contents($key);
                preg_match("/\d{3}/", $key, $match);
                $postData = file_get_contents('https://whattomine.com/coins/' . $match[0] . '.json');
                $data = parse_str($postData);
                $data = json_decode($postData, true);
                $dif24 = $data['difficulty24'];
                $dif3 = $data['difficulty3'];
                $dif7 = $data['difficulty7'];
                $dif = $data['difficulty'];
                $exch24 = number_format($data['exchange_rate24'], 8);
                $exch3 = number_format($data['exchange_rate3'], 8);
                $exch7 = number_format($data['exchange_rate7'], 8);
                $exch = number_format($data['exchange_rate'], 8);
                $differenceDif = round((($dif24 - $dif3) * 100 / $dif3), 2);
                $differenceExchenge = round(($exch24 - $exch3) * 100 / $exch3, 2);
                $start_teg = '<table class="table table-hover">';
                $stop_teg = '</table>';
                ?>
                <div class="col">
                    <li style="list-style: none;">
                        <p><?php echo parse($link, $start_teg, $stop_teg); ?></p>
                        <hr style="height: 2px; background-color: black;">

                        <form method="post">
                            <input type="text" name="url" id="url" style="display: none;" value="<?php echo $key; ?>">
                            <input type="submit" name="del" id="del" value="Delete Coin">
                        </form>
                        <div class="disp-flex">
                            <H3 style="background-color: chartreuse;">Монета: <?php echo $data['name']; ?> </H3>
                            <h3><a href="<?php echo $key; ?>" target='_blank'>Click here</a></H3>
                            <p>Сложность текущая: <?php echo floor($dif); ?></p>
                            <p>Сложность за 24 часа: <?php echo floor($dif24); ?></p>
                            <p>Сложность за 3 дня: <?php echo floor($dif3); ?></p>
                            <p>Сложность за 7 дней: <?php echo floor($dif7); ?></p>
                            <?php if ($differenceDif < 0) { ?>
                                <h3 style="color: red;font-size: 20px;">Разность
                                    сложности: <?php echo $differenceDif . '%' ?></h3>
                            <?php } ?>
                            <?php if ($differenceDif >= 0) { ?>
                                <h3 style="color: green;font-size: 20px;">Разность
                                    сложности: <?php echo $differenceDif . '%' ?></h3>
                            <?php } ?>
                            <p>Стоимость за 24 часа: <?php echo $exch24; ?> BTC</p>
                            <?php if ($differenceExchenge < 0) { ?>
                                <p style="color: red;font-size: 15px;">Изменение
                                    стоимости: <?php echo $differenceExchenge; ?> % </p>
                            <?php } ?>
                            <?php if ($differenceExchenge >= 0) { ?>
                                <p style="color: green;font-size: 15px;">Изменение
                                    стоимости: <?php echo $differenceExchenge; ?> % </p>
                            <?php } ?>

                    </li>
                </div>
                <?php $time_end = time();
                if(DEBUG == 1){
                    timeLong($time_start,$time_end);
                    memoryUsage(); }}
            ?>
        </div>
    </ul>
</div>
</body>
</html>


