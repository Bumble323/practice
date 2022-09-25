<?php
class Menu
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hello()
    {
        echo '私は' . $this->name . 'です';
    }
}

$curry = new Menu('CURRY');
echo "\n";
$pasta = new Menu('PASTA');


$curry->name = 'CURRY';
$pasta->name = 'PASTA';

// echo $curry->name;
// echo "\n";
// echo $pasta->name;
// echo "\n";
// $curry->hello();
// echo "\n";
// $pasta->hello();
?>

<p><?php echo $curry->name ?></p>
<p><?php echo $pasta->name ?></p>