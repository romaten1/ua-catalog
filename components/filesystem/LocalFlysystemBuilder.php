<?php
namespace app\components\filesystem;

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use trntv\filekit\filesystem\FilesystemBuilderInterface;

/**
 * Class LocalFlysystemProvider
 * @author Eugene Terentev <eugene@terentev.net>
 */
class LocalFlysystemBuilder implements FilesystemBuilderInterface
{
    public $path;

    /**
     * @return Filesystem|mixed
     */
    public function build()
    {
        $adapter = new Local(\Yii::getAlias($this->path));
        return new Filesystem($adapter);
    }
}