<?php

namespace CssInstaller\Composer;

use \Composer\Composer;
use \Composer\IO\IOInterface;
use \Composer\Plugin\PluginInterface;

class CssInstallerPlugin implements \Composer\Plugin\PluginInterface
{
  public function activate(Composer $composer, IOInterface $io)
  {
    $installer = new CssInstallerInstaller($io, $composer);
    $composer->getInstallationManager()->addInstaller($installer);
  }
}
