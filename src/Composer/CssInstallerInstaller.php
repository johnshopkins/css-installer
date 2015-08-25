<?php

namespace CssInstaller\Composer;

use \Composer\Package\PackageInterface;
use \Composer\Installer\LibraryInstaller;

class CssInstallerInstaller extends LibraryInstaller
{
  public function getPackageBasePath(PackageInterface $package)
  {
    return 'src/assets/css/lib/' . $package->getPrettyName();
  }

  public function supports($packageType)
  {
    return "css-lib" === $packageType;
  }
}
