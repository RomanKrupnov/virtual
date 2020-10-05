<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
class redisCacheProvider {
    const REDIS_SERVER = '127.0.0.1';
    const  REDIS_PORT = '6379';
    private $connection = null;
    private function getConnection(){
        if($this->connection===null){
            $this->connection = new Redis();
            $this->connection->connect(REDIS_SERVER, REDIS_PORT);
        }
        return $this->connection;
    }

    public function getCash($key){
        $result = false;
        if($c = $this->getConnection()){
            $result = unserialize($c->get($key));
        }
        return $result;
    }
    public function setCash($key, $value, $time=3000){
        if($c=$this->getConnection()){
            $c->set($key, serialize($value), $time);
        }
    }

    public function del($key){
        if($c=$this->getConnection()){
            $c->delete($key);
        }
    }

    public function clear(){
        if($c=$this->getConnection()){
            $c->flushDB();
        }
    }
}
?>
<?php
$a = new redisCacheProvider();?>
<div style="display: flex;">
    <?php  $key= '1';
    $value= '<div class="holder">    
    <p>товар 1</p>
    <div class="block">
        <h2>Товар1</h2>
        роывшгрцугшарцуаитолцуарвыгшуцршцвыраолрырвашцушураяфы
    </div>
</div>
</div>';
    $a->setCash($key,$value);?>
    <?php  $key= '2';
    $value= '<div class="holder">    
    <p>товар 2</p>
    <div class="block">
        <h2>Товар2</h2>
        ывацуацуотра лдлорващоцутадльчс амдлыв
    </div>
</div>
</div>';
    $a->setCash($key,$value);?>
    <?php  $key= '3';
    $value= '<div class="holder">    
    <p>товар 3</p>
    <div class="block">
        <h2>Товар 3</h2>
        ывамполцукрагшцщуролд щомгшщрукгшщоыолдст олршгмрщцук
    </div>
</div>
</div>';
    $a->setCash($key,$value);?>


    <?php echo $a->getCash(1);?>
    <?php echo $a->getCash(2);?>
    <?php echo $a->getCash(3);?>

</div>


</body>
</html>





