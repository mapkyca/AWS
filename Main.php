<?php

namespace IdnoPlugins\AWS {

    class Main extends \Idno\Common\Plugin {

	function registerEventHooks() {

	    // Load AWS SDK and dependencies
	    $classLoader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
	    $classLoader->registerNamespaces(array(
		'Aws' => dirname(__FILE__) . '/external/aws-sdk/src'
	    ));

	    $classLoader->register();
	}

    }

}