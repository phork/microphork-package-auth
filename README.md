#microphork

* [By Phork Labs](http://phorklabs.com/)
* Version: 0.1


##Introduction

This is an authentication package for the microphork framework. The authentication class is a dispatcher. Currently the only available handler spoofs the user data.


##Usage

```
//load and initialize a new auth package
$auth = \Phork::instance()->initPackage('auth', (
    function($result, $type) {
        $class = sprintf('\\Phork\\%s\\Auth', $type);
        return new $class();
    }
));

//get the loaded config
$config = \Phork::config()->get('auth');

//initialize the auth handler
if ($config->handlers && $handlers = $config->handlers->export()) {
    $auth->init($handlers);
}

//show the user data
\Phork::output()
    ->addContent('authenticated: '.$auth->isAuthenticated().'<br />')
    ->addContent('user id: '.$auth->getUserId().'<br />')
    ->addContent('user name: '.$auth->getUserName().'<br />')
;
```


##License

Licensed under The MIT License
<http://www.opensource.org/licenses/mit-license.php>