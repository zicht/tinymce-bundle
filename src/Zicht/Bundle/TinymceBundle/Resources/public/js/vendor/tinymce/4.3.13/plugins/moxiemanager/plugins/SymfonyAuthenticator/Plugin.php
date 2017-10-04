<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

// Figure out where Symfony is installed
$config = MOXMAN::getConfig();

$symfonyRoot = $config->get("SymfonyAuthenticator.root");

// Load symfony bootstrap
if ($symfonyRoot) {
    require_once $symfonyRoot . '/app/bootstrap.php.cache';
    require_once $symfonyRoot . '/app/autoload.php';
	require_once $symfonyRoot . '/app/AppKernel.php';
} else {
	die("Could not find symfony root.");
}

/**
 * This class handles MoxieManager SymfonyAuthenticator (Symfony >= 2.x).
 */
class MOXMAN_SymfonyAuthenticator_Plugin implements MOXMAN_Auth_IAuthenticator {
	private $session;

	public function authenticate(MOXMAN_Auth_User $user) {
		$config = MOXMAN::getConfig();

		// Load environment and session logic
		if (!$this->session) {
			$kernel = new AppKernel(
                $config->get("SymfonyAuthenticator.environment", "prod"),
                $config->get("SymfonyAuthenticator.debug", true)
            );
            $kernel->loadClassCache();
            $kernel->boot();

            $this->session = $kernel->getContainer()->get('session');
		}

		// Get all session data
		$sessionVars = $this->session->all();

		// Check logged in key
        // TODO do actual authentication and authorization
		$loggedInKey = $config->get("SymfonyAuthenticator.logged_in_key", "isLoggedIn");

		$sessionValue = isset($sessionVars[$loggedInKey]) ? $sessionVars[$loggedInKey] : false;

		if (!$sessionValue || $sessionValue === "false") {
			return false;
		}

		// Extend config with session prefixed sessions
		$sessionConfig = array();
		$configPrefix = $config->get("SymfonyAuthenticator.config_prefix", "moxiemanager");
		if ($configPrefix) {
			foreach ($sessionVars as $key => $value) {
				if (strpos($key, $configPrefix) === 0) {
					$sessionConfig[substr($key, strlen($configPrefix) + 1)] = $value;
				}
			}
		}

		// Extend the config with the session config
		$config->extend($sessionConfig);

		// Replace ${user} with all config items
		$key = $config->get("SessionAuthenticator.user_key", "user");
		if ($key && isset($sessionVars[$key])) {
			$config->replaceVariable("user", $sessionVars->get($key));
			$user->setName($sessionVars->get($key));
		}

		return true;
	}
}

MOXMAN::getAuthManager()->add("SymfonyAuthenticator", new MOXMAN_SymfonyAuthenticator_Plugin());