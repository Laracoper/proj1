<?

require '../vendor/autoload.php';

$patern_phone = '/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';
$rules = [

    'lengthMin' => [
        ['name', 2]
    ],
    // 'lengthMax' => [
    //     ['age', 3]
    // ],
    'required' => ['name', 'surname'],
    // 'numeric' => ['age', 'phone'],
    // 'integer' => ['age', 'phone'],
    'regex' => [
        ['name', '/[A-zА-яЁё]{4,100}$/u'],
        // ['phone', $patern_phone]
    ],

];

if (!empty($_POST)) {
    \Valitron\Validator::lang('ru');
    $v = new \Valitron\Validator($_POST);
    $v->rules($rules);
    if ($v->validate()) {
        $_SESSION['success'] = 'данные отправлены';
    


        $name = $_POST['name'];
        $surname = $_POST['surname'];
       

        $sql = "INSERT INTO `users` (`name`, `surname`) VALUES (?, ?)";
        $res = $pdo->prepare($sql);
        $res->execute([$name, $surname]);


       
    } else {
        $errors = '<ol>';
        foreach ($v->errors() as $error) {
            foreach ($error as $item) {
                $errors .= "<li>{$item}</li>";
            }
        }
        $errors .= '</ol>';
        $_SESSION['errors'] = $errors;
    }
}


