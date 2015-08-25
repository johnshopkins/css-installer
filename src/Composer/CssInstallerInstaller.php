<?php

namespace CssInstaller\Composer;

use \Composer\Package\PackageInterface;
use \Composer\Installer\LibraryInstaller;

class CssInstallerInstaller extends LibraryInstaller
{
  public function getPackageBasePath(PackageInterface $package)
  {
    $name = str_replace("johnshopkins/", "", $package->getPrettyName());
    return 'src/assets/css/lib/' . $name;
  }

  public function supports($packageType)
  {
    return "css-lib" === $packageType;
  }
}
