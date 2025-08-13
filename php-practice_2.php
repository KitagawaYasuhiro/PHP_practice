<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 === 0) {
        echo "tic\n";
    } elseif ($i % 5 === 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}


// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

var_dump($personalInfos);

// 問題1
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。\n";

// 問題2
foreach ($personalInfos as $index => $info) {
    $number = $index + 1;
    echo "{$number}番目の{$info['name']}さんのメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";
}

// 問題3
$ageList = [25, 30, 18];

foreach ($ageList as $index => $age) {
    $personalInfos[$index]['age'] = $age;
}

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');
echo "学籍番号{$yamada->studentId}番の生徒は{$yamada->studentName}です。\n";

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo "{$this->studentName}は{$class}の授業に出席しました。\n";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 問題1
$now = new DateTime();
echo $now->format('Y-m-d');

// 問題2
$date1 = new DateTime('today');
$date2 = new DateTime('1992-04-25');

$interval = $date2->diff($date1);
$days = $interval->days;

echo "あの日から{$days}日経過しました。";

?>