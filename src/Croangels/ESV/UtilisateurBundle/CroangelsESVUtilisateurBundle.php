<?php

namespace Croangels\ESV\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CroangelsESVUtilisateurBundle extends Bundle
{
  function getParent()
  {
    return 'FOSUserBundle';
  }
}
