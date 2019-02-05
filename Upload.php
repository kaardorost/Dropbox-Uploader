<?php 

require __DIR__ . '/vendor/autoload.php';

use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;
use Kunnu\Dropbox\DropboxFile;

$app = new DropboxApp("App_key||Client_id", "App_Secret", 'Acces_Token');

//Configure Dropbox service
$dropbox = new Dropbox($app);

//Get File Metadata
// $fileMetadata = $dropbox->getMetadata("/helloworld.txt");

//File Name
// printf($fileMetadata->getName());
$filepath = "Succes";

$file = $dropbox->upload('Hello.zip', "/Hello/Hello.zip", ['autorename' => true]);

//Uploaded File
echo $file->getName();