<?php
$url = "";
$url1 = "https://ru.wikipedia.org/wiki/%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8";
$url2 = "https://echo.msk.ru/programs/sorokina/2917870-echo/";
$url3 = "https://mishka-knizhka.ru/skazki-dlay-detey/zarubezhnye-skazochniki/skazki-alana-milna/vinni-puh-i-vse-vse-vse/#glava-pervaya-v-kotoroj-my-znakomimsya-s-vinni-puhom-i-neskolkimi-pchy";


    if (isset($_GET['preset'])) {
        if ($_GET['preset'] === "1") {
            $url = "https://ru.wikipedia.org/wiki/%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8";
        }
        if ($_GET['preset'] === "2") {
            $url = "https://echo.msk.ru/programs/sorokina/2917870-echo/";
        }
        if ($_GET['preset'] === "3") {
            $url = "https://mishka-knizhka.ru/skazki-dlay-detey/zarubezhnye-skazochniki/skazki-alana-milna/vinni-puh-i-vse-vse-vse/#glava-pervaya-v-kotoroj-my-znakomimsya-s-vinni-puhom-i-neskolkimi-pchy";
        }
        $temp = curl_init();
        curl_setopt($temp, CURLOPT_URL, $url);
        curl_setopt($temp, CURLOPT_RETURNTRANSFER, true);
        $html = curl_exec($temp);
        $_POST['text'] = $html;
        $_SESSION['html'] = $html;

    }





