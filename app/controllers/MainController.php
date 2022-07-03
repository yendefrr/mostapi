<?php

class MainController
{
    public function index(): void
    {
        echo 'Здесь будет интерактивный список разных API';
    }

    public function getApiResponse($url): void
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($_GET));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        echo $result;
    }
}