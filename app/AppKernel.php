<?php

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles():iterable
    {
		return array(
			new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
			new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
			new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
			new AppBundle\AppBundle(),
		);

		/*if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
			//
		}*/

	}

	/**
	 * @throws Exception
	 */
	public function registerContainerConfiguration(LoaderInterface $loader)
	{
		$loader->load($this->getProjectDir() . '/config/config_' . $this->getEnvironment() . '.yml');
	}
}
