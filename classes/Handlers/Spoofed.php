<?php
    namespace Phork\Pkg\Auth\Handlers;
    
    /**
     * Spoofs the user authentication with hard coded data. This should
     * be used as a handler for the Auth class.
     *
     * The token validation can be used as an addition validation method
     * after the user has been authenticated to help prevent XSS attacks.
     * This hardcodes a single token but tokens can also be generated for
     * single use.
     *
     * @author Elenor Collings <elenor@phork.org>
     * @package \Phork\Pkg\Auth
     */
    class Spoofed implements HandlerInterface
    {
        protected $authenticated;
        protected $userid;
        protected $username;
        protected $token;
        
    
        /**
         * Sets up the handler's params including the user account data.
         *
         * @access public
         * @param array $params An array of params to set for each property
         * @return void
         */
        public function __construct($params = array())
        {
            foreach ($params as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
        
        /**
         * Authenticates the user by username and password.
         *
         * @access public
         * @param string $username The username to authenticate
         * @param string $password The associated password
         * @return boolean True if authenticated successfully
         */
        public function standardAuth($username, $password)
        {
            return true;
        }
        
        /**
         * Authenticates the user by cookie.
         *
         * @access public
         * @return boolean True if authenticated successfully
         */
        public function cookieAuth()
        {
            return true;
        }
        
        /**
         * Logs out a user and clears all the cookies.
         *
         * @access public
         * @return boolean True if logged out successfully
         */
        public function logout()
        {
            return true;
        }
        
        /**
         * Returns whether or not the user is authenticated.
         *
         * @access public
         * @return boolean True if authenticated
         */
        public function isAuthenticated()
        {
            return $this->authenticated;
        }
        
        /**
         * Returns the user's ID.
         *
         * @access public
         * @return integer The user ID
         */
        public function getUserId()
        {
            return $this->userid;
        }
        
        /**
         * Returns the user's username.
         *
         * @access public
         * @return string The username
         */
        public function getUserName()
        {
            return $this->username;
        }
        
        /**
         * Returns whether or not the token is valid.
         *
         * @access public
         * @param string $token The token to validate
         * @return boolean True if valid
         */
        public function isTokenValid($token)
        {
            return $token == $this->token;
        }
        
        /**
         * Returns a token that can used to further validate 
         * the user.
         *
         * @access public
         * @return string The token
         */
        public function getToken()
        {
            return $this->token;
        }
    }
