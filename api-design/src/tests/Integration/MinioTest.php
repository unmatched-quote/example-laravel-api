<?php

namespace Tests\Integration;

use Aws\Result;
use Tests\TestCase;
use Aws\S3\S3Client;
use Illuminate\Support\Facades\Storage;

class MinioTest extends TestCase
{
    public function testMinioUploadsFile()
    {
        $result = Storage::disk('claims')->put('claims/25/claim-specific-file.json', json_encode([
            'value' => (new \DateTime("now", new \DateTimeZone('UTC')))->format('Y-m-d H:i:s')
        ]));

        $this->assertTrue($result);
    }

    public function testMinioWorksViaS3Client()
    {
        $s3 = new S3Client([
            'version' => 'latest',
            'region'  => '',
            'endpoint' => env('CLAIMS_MINIO_ENDPOINT'),
            'use_path_style_endpoint' => true,
            'credentials' => [
                'key'    => env('CLAIMS_MINIO_ACCESS_KEY_ID'),
                'secret' => env('CLAIMS_MINIO_SECRET_ACCESS_KEY'),
            ],
        ]);

        $insert = $s3->putObject([
            'Bucket' => 'claims-api',
            'Key'    => 'testkey',
            'Body'   => 'This is MinIO integration test'
        ]);

        $this->assertInstanceOf(Result::class, $insert);

        $retrive = $s3->getObject([
            'Bucket' => 'claims-api',
            'Key'    => 'testkey',
            'SaveAs' => storage_path('testkey_local')
        ]);

        $this->assertInstanceOf(Result::class, $retrive);
    }
}
