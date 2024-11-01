<?php

namespace League\Flysystem\Plugin;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use League\Flysystem\FilesystemInterface;
use League\Flysystem\PluginInterface;

abstract class AbstractPlugin implements PluginInterface
{
    /**
     * @var FilesystemInterface
     */
    protected $filesystem;

    /**
     * Set the Filesystem object.
     *
     * @param FilesystemInterface $filesystem
     */
    public function setFilesystem(FilesystemInterface $filesystem)
    {
        $this->filesystem = $filesystem;
    }
}
