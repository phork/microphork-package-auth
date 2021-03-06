<?php
    namespace Phork\Pkg\Auth\Handlers;
    
    /**
     * The auth handler interface makes sure each auth handler has
     * a proper constructor as well as authentication methods and
     * user data retrieval methods.
     *
     * @author Elenor Collings <elenor@phork.org>
     * @package \Phork\Pkg\Auth
     */
    interface HandlerInterface
    {
        public function __construct($params = array());
        
        public function standardAuth($username, $password);
        public function cookieAuth();
        public function logout();
        
        public function isAuthenticated();
        
        public function getUserId();
        public function getUserName();
        
        public function isTokenValid($token);
        public function getToken();
    }
