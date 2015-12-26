<?php

namespace LeHibouc\AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
