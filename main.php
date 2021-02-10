<?php

$route = str_replace(".php", "", $_p);
$route = str_replace("/", "", $route);

$header = file_get_contents("components/header.html");
$footer = file_get_contents("components/footer.html");
$nav = file_get_contents("components/nav.html");
$hero = $route === "index" ? file_get_contents("components/index-hero.html") : file_get_contents("components/hero.html");
$data = json_decode(file_get_contents("custom/page.json"), true);

$title = $data[$route]["title"];
$hero_data = $data[$route]["hero"];

switch ($route) {
    case "index":
        $title .= " - A Simple World That Made For You";
        break;

    default:
        if (is_string($title)) {
            $title .= " - SoTap 游戏兴趣社区";
        } else {
            $title = "Unknown Page";
        }
        $hero = str_replace("[background]", $hero_data["bg"], $hero);
        $hero = str_replace("[title]", $hero_data["title"], $hero);
        $hero = str_replace("[description]", $hero_data["desc"], $hero);
}

$nav = str_replace("[" . $route . "-active]", "active", $nav);
$header = str_replace("[title]", $title, $header);
$footer = str_replace("[year]", date("Y"), $footer);