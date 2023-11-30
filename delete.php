
<?php

include "connection.php";
use Google\Cloud\Storage\StorageClient;
$id = filterRequest("id"); // get the id parameter from POST request
$userData = getAllData("images", "users", "id=?", array($id));

if (!empty($userData)) {
  $storage = new StorageClient();
  $bucketName = 'willwork-402711.appspot.com'; // Replace with your actual GCS bucket name
  $bucket = $storage->bucket($bucketName);
  $imageName = $userData[0]['images'];
  $objectName = 'upload/' . $imageName;

  // Delete the image file from Google Cloud Storage
  $object = $bucket->object($objectName);
  $object->delete();
  // delete the user record from the database
  deleteData('users', 'id =?', array($id));
}