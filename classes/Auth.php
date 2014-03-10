<?php
    namespace Phork\Pkg\Auth;
    
    /**
     * Loads an authentication system and delegates processing to it.
     * This is a singleton.
     *
     * <code>
     *   $auth = new Auth();
     *   $auth->addHandler('database', new Auth\Database());
     *   $auth->isAuthenticated();
     * </code>
     *
     * @author Elenor Collings <elenor@phork.org>
     * @package \Phork\Pkg\Auth
     */
    class Auth extends \Phork\Core\Dispatcher
    {
        protected $instanceOf = '\\Phork\\Pkg\\Auth\\Handlers\\HandlerInterface';
        
        protected $minimum = 1;
        protected $maximum = 1;
    }
