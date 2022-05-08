<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

function apiCall($url)
{
    // Cache
    $fileName = md5($url);
    $path = './cache/' . $fileName;
    $fileExists = file_exists($path);
    if($fileExists)
    {
        echo '<br>file exists';
        $expirationTime = time() - 60 * 60;
        $outdated = filemtime($path) < $expirationTime;

        if($outdated)
        {
            echo '<br>file outdated';
            unlink($path);
            $fileExists = false;
        }
    }
    
    // Fetch from cache
    if($fileExists)
    {
        echo '<br>fetch from cache';
        $result = file_get_contents($path);
    }

    // Fetch from URL
    else
    {
        echo '<br>fetch from URL';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($curl);

        file_put_contents($path, $result);
    }
    
    $jsonResult = json_decode($result);

    return $jsonResult;
}
