<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

function apiCall($url)
{
    $fileName = md5($url);
    $filePath = './cache/' . $fileName;
    $fileExists = file_exists($filePath);

    if($fileExists)
    {
        $fileTime = filemtime($filePath);
        $time = time();

        if($fileTime < $time - 60)
        {
            echo '<br>Périmé';
            unlink($filePath);
            $fileExists = false;
        }
    }

    if($fileExists)
    {
        echo '<br>Fichier existe';

        $result = file_get_contents($filePath);
    }
    else
    {
        echo '<br>Fichier existe pas';
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

        $result = curl_exec($curl);

        file_put_contents($filePath, $result);
    }
    
    $jsonResult = json_decode($result);

    return $jsonResult;
}

// $fileName = 'kikoo';
// $filePath = './cache/' . $fileName;

// Create the file
// file_put_contents($filePath, 'ipsum');

// Test if file exists
// $cacheExists = file_exists($filePath);

// // Get file content
// $result = file_get_contents($filePath);

// // Get file date
// $fileTime = filemtime($filePath);
// $time = time();
// if($fileTime < $time - 60 * 60)
// {
//     echo 'périmé';
// }
// else
// {
//     echo 'pas périmé';
// }

// Delete file
// unlink($filePath);

// die('ok');
