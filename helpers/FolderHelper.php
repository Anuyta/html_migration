<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 21.08.2018
 * Time: 12:03
 */

class FolderHelper
{
    public static function getFileDestination($fileName)
    {
        $baseFolder = './uploads';
        $fileNameHash = md5($fileName.time());
        $folderName = '/'.substr($fileNameHash, 0, 1);
        $subFolderName = '/'.substr($fileNameHash, 1, 1);

        if(!file_exists($baseFolder.$folderName))
        {
            mkdir($baseFolder.$folderName, 0777, true);
        }
        if(!file_exists($baseFolder.$folderName.$subFolderName))
        {
            mkdir($baseFolder.$folderName.$subFolderName, 0777,true);
        }

        return $baseFolder.$folderName.$subFolderName.'/'.$fileNameHash;
    }
}