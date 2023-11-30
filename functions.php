<?php

// require 'vendor/autoload.php';
// 
// use Google\Cloud\Storage\StorageClient;
// // ==========================================================
// //  Copyright Reserved Wael Wael Abo Hamza (Course Ecommerce)
// // ==========================================================
// 
// define("MB", 1048576);
// 
// function filterRequest($requestname)
// {
//   return  htmlspecialchars(strip_tags($_POST[$requestname]));//securit
// }
// 
// function uploadImageToBucket($imageRequest, $bucketName)
// {
//     global $msgError;
//     $imagename  = rand(1000, 10000) . $_FILES[$imageRequest]['name'];
//     $imagetmp   = $_FILES[$imageRequest]['tmp_name'];
//     $imagesize  = $_FILES[$imageRequest]['size'];
//     $allowExt   = array("jpg", "png",);
//     $strToArray = explode(".", $imagename);
//     $ext        = end($strToArray);
//     $ext        = strtolower($ext);
// 
//     if (!empty($imagename) && !in_array($ext, $allowExt)) {
//         $msgError = "EXT";
//     }
//     if ($imagesize > 7 * MB) {
//         $msgError = "size";
//     }
//     if (empty($msgError)) {
//         // Google Cloud Storage upload logic
//         $storage = new StorageClient();
//         $bucket = $storage->bucket($bucketName);
// 
//         $object = $bucket->upload(
//             file_get_contents($imagetmp),
//             [
//                 'name' => 'upload/' . $imagename
//             ]
//         );
// 
//         // Return the Cloud Storage URI of the uploaded image
//         return $imagename;
//         // return $object->info()['mediaLink'];
//     } else {
//         return "fail";
//     }
// }
// function getAllData( $name ,$table, $where = null, $values = null)
// {
//     global $con;
//     $data = array();
//     $stmt = $con->prepare("SELECT $name  FROM $table WHERE   $where ");
//     $stmt->execute($values);
//     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     $count  = $stmt->rowCount();
//     if ($count > 0){
//         
//         echo json_encode(array("status" => "success", "data" => $data));
//         return $data;
//        
//     } else if ($count == 0 ){
//         echo json_encode(array("status" => "success" , "message" => "No images in the sever" , "data" => array( )));
//     } else{
//         echo json_encode(array("status" => "failure"));
// 
//     }
//     // return $data; 
// }
// 
// function insertData($table, $data, $json = true)
// {
//     global $con;
//     try {
//         foreach ($data as $field => $v) {
//             $ins[] = ':' . $field;
//         }
// 
//         $ins = implode(',', $ins);
//         $fields = implode(',', array_keys($data));
//         $sql = "INSERT INTO $table ($fields) VALUES ($ins)";
// 
//         $stmt = $con->prepare($sql);
// 
//         foreach ($data as $f => $v) {
//             $stmt->bindValue(':' . $f, $v);
//         }
// 
//         $stmt->execute();
//         $count = $stmt->rowCount();
// 
//         if ($json == true) {
//             if ($count > 0) {
//                 echo json_encode(array("status" => "success"));
//             } else {
//                 echo json_encode(array("status" => "failure", "error" => $stmt->errorInfo()));
//             }
//         }
// 
//         return $count;
//     } catch (PDOException $e) {
//         // Log the error or handle it as needed
//         echo json_encode(array("status" => "failure", "error" => $e->getMessage()));
//         return 0;
//     }
// }
// 
// 
// function updateData($table, $data, $where, $json = true)
// {
//     global $con;
//     $cols = array();
//     $vals = array();
// 
//     foreach ($data as $key => $val) {
//         $vals[] = "$val";
//         $cols[] = "`$key` =  ? ";
//     }
//     $sql = "UPDATE $table SET " . implode(', ', $cols) . " WHERE $where";
// 
//     $stmt = $con->prepare($sql);
//     $stmt->execute($vals);
//     $count = $stmt->rowCount();
//     if ($json == true) {
//     if ($count > 0) {
//         echo json_encode(array("status" => "success"));
//     } else {
//         echo json_encode(array("status" => "failure"));
//     }
//     }
//     return $count;
// }
// 
// function deleteData($table, $where,$values = null, $json = true)
// {
//     global $con;
//     $stmt = $con->prepare("DELETE FROM $table WHERE $where");
//     $stmt->execute($values);
//     $count = $stmt->rowCount();
//     if ($json == true) {
//         if ($count > 0) {
//             echo json_encode(array("status" => "success"));
//         } else {
//             echo json_encode(array("status" => "failure"));
//         }
//     }
//     return $count;
// }
// 
// 
// 
// function imageUploadToGCS($imageRequest)
// {
//     global $msgError;
// 
//     $imagename = rand(1000, 10000) . $_FILES[$imageRequest]['name'];
//     $imagetmp = $_FILES[$imageRequest]['tmp_name'];
//     $imagesize = $_FILES[$imageRequest]['size'];
//     $allowExt = array("jpg", "png", "bmp");
//     $strToArray = explode(".", $imagename);
//     $ext = end($strToArray);
//     $ext = strtolower($ext);
// 
//     if (!empty($imagename) && !in_array($ext, $allowExt)) {
//         $msgError = "EXT";
//     }
// 
//     if ($imagesize > 9 * MB) {
//         $msgError = "size";
//     }
// 
//     if (empty($msgError)) {
//         // Google Cloud Storage upload logic
//         $storage = new StorageClient();
//         $bucketName = 'willwork-402711.appspot.com'; // Replace with your actual GCS bucket name
//         $bucket = $storage->bucket($bucketName);
// 
//         $contentType = 'image/jpeg'; // Default to JPEG
// 
//         if ($ext == 'png') {
//             $contentType = 'image/png';
//         } elseif ($ext == 'bmp') {
//             $contentType = 'image/bmp';
//         }
// 
//         $object = $bucket->upload(
//             file_get_contents($imagetmp),
//             [
//                 'name' => 'upload/' . $imagename,
//                 'metadata' => ['contentType' => $contentType]
//             ]
//         );
// 
//         // Return the Cloud Storage URI of the uploaded image
//         return $imagename;
//     } else {
//         return "fail";
//     }
// }
// 
// 
// 
// 
// 
// function imageUpload($imageRequest)
// {
//   global $msgError;
//   $imagename  = rand(1000, 10000) . $_FILES[$imageRequest]['name'];
//   $imagetmp   = $_FILES[$imageRequest]['tmp_name'];
//   $imagesize  = $_FILES[$imageRequest]['size'];
//   $allowExt   = array("jpg", "png",);
//   $strToArray = explode(".", $imagename);
//   $ext        = end($strToArray);
//   $ext        = strtolower($ext);
// 
//   if (!empty($imagename) && !in_array($ext, $allowExt)) {
//     $msgError = "EXT";
//   }
//   if ($imagesize > 7 * MB) {
//     $msgError = "size";
//   }
//   if (empty($msgError)) {
//     move_uploaded_file($imagetmp,  "./upload/" . $imagename);
//     return $imagename;
//   } else {
//     return "fail";
//   }
// }
// 
// 
// 
// function deleteFile($dir, $imagename)
// {
//     if (file_exists($dir . "/" . $imagename)) {
//         unlink($dir . "/" . $imagename);
//     }
// }
// 
// function checkAuthenticate()
// {
//     if (isset($_SERVER['PHP_AUTH_USER'])  && isset($_SERVER['PHP_AUTH_PW'])) {
//         if ($_SERVER['PHP_AUTH_USER'] != "wael" ||  $_SERVER['PHP_AUTH_PW'] != "wael12345") {
//             header('WWW-Authenticate: Basic realm="My Realm"');
//             header('HTTP/1.0 401 Unauthorized');
//             echo 'Page Not Found';
//             exit;
//         }
//     } else {
//         exit;
//     }
// 
//     // End 
// }
// 
// 
// function printfailure($message = "None"){
//     echo json_encode(
//         array(
//             "status" => "Failure",
//             "messege" => $message
// 
//         )
//     );
// }
// 

require 'vendor/autoload.php';

use Google\Cloud\Storage\StorageClient;
// ==========================================================
//  Copyright Reserved Wael Wael Abo Hamza (Course Ecommerce)
// ==========================================================

define("MB", 1048576);

function filterRequest($requestname)
{
  return  htmlspecialchars(strip_tags($_POST[$requestname]));//securit
}

function getImageByName($imageName)
{
    global $con;

    $sql = "SELECT * FROM users WHERE images = :imageName";
    $stmt = $con->prepare($sql);
    $stmt->bindValue(':imageName', $imageName);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function uploadImageToBucket($imageRequest, $bucketName)
{
    global $msgError;
    $imagename  = rand(1000, 10000) . $_FILES[$imageRequest]['name'];
    $imagetmp   = $_FILES[$imageRequest]['tmp_name'];
    $imagesize  = $_FILES[$imageRequest]['size'];
    $allowExt   = array("jpg", "png",);
    $strToArray = explode(".", $imagename);
    $ext        = end($strToArray);
    $ext        = strtolower($ext);

    if (!empty($imagename) && !in_array($ext, $allowExt)) {
        $msgError = "EXT";
    }
    if ($imagesize > 7 * MB) {
        $msgError = "size";
    }
    if (empty($msgError)) {
        // Google Cloud Storage upload logic
        $storage = new StorageClient();
        $bucket = $storage->bucket($bucketName);

        $object = $bucket->upload(
            file_get_contents($imagetmp),
            [
                'name' => 'upload/' . $imagename
            ]
        );

        // Return the Cloud Storage URI of the uploaded image
        return $imagename;
        // return $object->info()['mediaLink'];
    } else {
        return "fail";
    }
}
function getAllData( $name ,$table, $where = null, $values = null)
{
    global $con;
    $data = array();
    $stmt = $con->prepare("SELECT $name  FROM $table WHERE   $where ");
    $stmt->execute($values);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $count  = $stmt->rowCount();
    if ($count > 0){
        
        echo json_encode(array("status" => "success", "data" => $data));
        return $data;
       
    } else if ($count == 0 ){
        echo json_encode(array("status" => "success" , "message" => "No images in the sever" , "data" => array( )));
    } else{
        echo json_encode(array("status" => "failure"));

    }
    // return $data; 
}

function insertData($table, $data, $json = true)
{
    global $con;

    // Check if the image already exists in the database
    $existingImage = getImageByName($data['images']);

    if (!empty($existingImage)) {
        // Image already exists in the database, skip insertion
        return 0;
    }

    try {
        foreach ($data as $field => $v) {
            $ins[] = ':' . $field;
        }

        $ins = implode(',', $ins);
        $fields = implode(',', array_keys($data));
        $sql = "INSERT INTO $table ($fields) VALUES ($ins)";

        $stmt = $con->prepare($sql);

        foreach ($data as $f => $v) {
            $stmt->bindValue(':' . $f, $v);
        }

        $stmt->execute();
        $count = $stmt->rowCount();

        if ($json == true) {
            if ($count > 0) {
                echo json_encode(array("status" => "success"));
            } else {
                echo json_encode(array("status" => "failure", "error" => $stmt->errorInfo()));
            }
        }

        return $count;
    } catch (PDOException $e) {
        // Log the error or handle it as needed
        echo json_encode(array("status" => "failure", "error" => $e->getMessage()));
        return 0;
    }
}

function updateData($table, $data, $where, $json = true)
{
    global $con;
    $cols = array();
    $vals = array();

    foreach ($data as $key => $val) {
        $vals[] = "$val";
        $cols[] = "`$key` =  ? ";
    }
    $sql = "UPDATE $table SET " . implode(', ', $cols) . " WHERE $where";

    $stmt = $con->prepare($sql);
    $stmt->execute($vals);
    $count = $stmt->rowCount();
    if ($json == true) {
    if ($count > 0) {
        echo json_encode(array("status" => "success"));
    } else {
        echo json_encode(array("status" => "failure"));
    }
    }
    return $count;
}

function deleteData($table, $where,$values = null, $json = true)
{
    global $con;
    $stmt = $con->prepare("DELETE FROM $table WHERE $where");
    $stmt->execute($values);
    $count = $stmt->rowCount();
    if ($json == true) {
        if ($count > 0) {
            echo json_encode(array("status" => "success"));
        } else {
            echo json_encode(array("status" => "failure"));
        }
    }
    return $count;
}



function imageUploadToGCS($imageRequest)
{
    global $msgError, $con;

    $imagename = rand(1000, 10000) . $_FILES[$imageRequest]['name'];
    $imagetmp = $_FILES[$imageRequest]['tmp_name'];
    $imagesize = $_FILES[$imageRequest]['size'];
    $allowExt = array("jpg", "png", "bmp");
    $strToArray = explode(".", $imagename);
    $ext = end($strToArray);
    $ext = strtolower($ext);

    // Check if the image already exists in the database
    $existingImage = getImageByName($imagename);

    if (!empty($existingImage)) {
        // Image already exists in the database, skip upload
        return $imagename;
    }

    if (!empty($imagename) && !in_array($ext, $allowExt)) {
        $msgError = "EXT";
    }

    if ($imagesize > 9 * MB) {
        $msgError = "size";
    }

    if (empty($msgError)) {
        // Google Cloud Storage upload logic
        $storage = new StorageClient();
        $bucketName = 'willwork-402711.appspot.com'; // Replace with your actual GCS bucket name
        $bucket = $storage->bucket($bucketName);

        $contentType = 'image/jpeg'; // Default to JPEG

        if ($ext == 'png') {
            $contentType = 'image/png';
        } elseif ($ext == 'bmp') {
            $contentType = 'image/bmp';
        }

        $object = $bucket->upload(
            file_get_contents($imagetmp),
            [
                'name' => 'upload/' . $imagename,
                'metadata' => ['contentType' => $contentType]
            ]
        );

        // Return the Cloud Storage URI of the uploaded image
        return $imagename;
    } else {
        return "fail";
    }
}




function imageUpload($imageRequest)
{
  global $msgError;
  $imagename  = rand(1000, 10000) . $_FILES[$imageRequest]['name'];
  $imagetmp   = $_FILES[$imageRequest]['tmp_name'];
  $imagesize  = $_FILES[$imageRequest]['size'];
  $allowExt   = array("jpg", "png",);
  $strToArray = explode(".", $imagename);
  $ext        = end($strToArray);
  $ext        = strtolower($ext);

  if (!empty($imagename) && !in_array($ext, $allowExt)) {
    $msgError = "EXT";
  }
  if ($imagesize > 7 * MB) {
    $msgError = "size";
  }
  if (empty($msgError)) {
    move_uploaded_file($imagetmp,  "./upload/" . $imagename);
    return $imagename;
  } else {
    return "fail";
  }
}



function deleteFile($dir, $imagename)
{
    if (file_exists($dir . "/" . $imagename)) {
        unlink($dir . "/" . $imagename);
    }
}

function checkAuthenticate()
{
    if (isset($_SERVER['PHP_AUTH_USER'])  && isset($_SERVER['PHP_AUTH_PW'])) {
        if ($_SERVER['PHP_AUTH_USER'] != "wael" ||  $_SERVER['PHP_AUTH_PW'] != "wael12345") {
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Page Not Found';
            exit;
        }
    } else {
        exit;
    }

    // End 
}


function printfailure($message = "None"){
    echo json_encode(
        array(
            "status" => "Failure",
            "messege" => $message

        )
    );
}


// function sendEmail($to , $title , $body){
// $header = "From: buySellApp@gmail.com" . "\n ". "CC: dinaaehab@gmail.com";
//     mail($to, $title, $body, $header);
//     echo "Success";
// }

// function sendEmail($to , $title , $body){
// $header = "From: buySellApp@gmail.com" . "\n ". "CC: dinaaehab@gmail.com";
//     mail($to, $title, $body, $header);
//     echo "Success";
// }