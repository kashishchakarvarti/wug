<?php
// Include the SDK using the composer autoloader
require 'vendor/autoload.php';

function uploadFile($file, $fileName) {
    $s3 = new Aws\S3\S3Client([
        'region'  => 'ap-south-1',
        'version' => 'latest',
        'credentials' => [
            'key'    => 'AKIAVU2S4AKBL33CBRBI',
            'secret' => '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',
        ]
    ]);
    
    $result = $s3->putObject([
        'Bucket' => 'wug-media',
        'Key'    => $fileName,
        'SourceFile'   => $file,
    ]);
    
    return $result['ObjectURL'];
}