<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 21/03/2018
 * Time: 13:45
 */
$appText = [


    'MICRO1' => "Home",
    'MICRO2' => "About",
    'MICRO3' => "Demos",
    'MICRO4' => "Another",

    'DEMO1' => "Page One",
    'DEMO2' => "Page Two",
    'DEMO3' => "Page Tree",
    'DEMO4' => "Page Four",
    'DEMO5' => "Page Five",

    'MICRO_PHP' => 'MicroPHP',
    'DROPDOWN' => 'DropDown',
    'DROPDOWN2' => 'Demos',
    'TRANSLATE' => "C'est un sport qui repose sur le travail d'équipe et promet du spectacle – mais rarement comme ça. Les championnats du monde aquatiques ont été le théâtre d'un sauvetage dramatique dans la vie réelle lorsque la nageuse artistique américaine Anita Alvarez a dû être tirée hors de l'eau par son entraîneur après avoir perdu connaissance et coulé au fond de la piscine.",



    'ABOUT_P1' => 'I hope you enjoy using this framework as much as I enjoyed building it. All the classes, with the exception of the render class, that extends Twig, and general concepts are by
                    CoolDeavil. All was done with lots of ❤️ and available on a GitHub  public repository',
    'ABOUT_P2' => "Simplicity and ease of use are the main ideas underlined on this framework. Starting with a minimal dependency of packages, and the implementation of PHP-FIG standards.</p><p> The request is matched by the router and is processed on the pipeline then returned as a response object.  These half a dozen lines that make the index.php show this idea.",
    'ABOUT_P3' => "The code is based on the Model View Controller pattern MVC, and old but effective architecture. All controllers implement the Psr\Http\Message\MessageInterface Methods. Allowing the use in the pipeline of any other middleware implementing this standard.",



    'TEST' => 'Trial',

    'MICRO_PHP_1' => 'Bootstrap',
    'MICRO_PHP_2' => 'DataBase Settings',
    'MICRO_PHP_3' => 'Navigation',
    'MICRO_PHP_4' => 'Webpack Integration',
    'MICRO_PHP_5' => 'Response Redirect',
    'MICRO_PHP_6' => 'Resource Route',
    'MICRO_PHP_7' => 'Twig Extensions',



    'PRESENTATION_TITTLE' => 'The Concepts Behind...',
    'PRESENTATION_SUBTITLE' => 'Some base ideas about the Framework',
    'BANNER_TITTLE' => 'Some Random Title',





    'PRESENTATION' => 'Simplicity and ease of use are the main ideas underlined on this framework. Starting with a minimal dependency of just tree packages, guzzlehttp/psr7 psr/http-message http-interop/response-sender
The code is based on the Model View Controller pattern MVC, and old but effective architecture. All controllers implement the Psr\Http\Message\MessageInterface Methods. Allowing the use in the pipeline of any other middleware implementing this standard
All main classes are based on Interfaces, like the RenderInterface or RouterInterface, making very easy to change the logic behind, like for example replacing the custom router class that ships with the framework with some other like for example coffeecode/router or the dependency injection by using a more advanced Container (*) like PHP-DI 6 or even a Symphony component like the DependencyInjection. For the render system, change it, if you can find a better one than Twig, the renderer that I chose to be used by microUI, and now the official template render for Symphony.
The simplicity of the index.php file reflects the all idea behind the framework.
(*) The DIContainer Class is in fact a simple key value array with some methods to get and set the values, I called a box, microUI is on a box! The main concept of the framework is dependency injection thru the container from witch the dispatcher will request all controller matched by the router.If you need a real Dependency Injection Container use one of the mentioned above or chose from many available on packagist',


    'LOG_IN' => "LogIn",
    'REGISTER' => "Register",
    'DASHBOARD' => "Profile",
    'LOG_OUT' => "LogOut",




    // Author Model


    ## Dates
    'YEAR' => 'Year',
    'MONTH'=> 'Month',
    'DAY'=> 'Day',
    'HOUR'=> 'Hour',
    'MINUTE'=> 'Minute',
    'SECOND'=> 'Second',


    ## Dates
    'YEARS' => 'Years',
    'MONTHS'=> 'Months',
    'DAYS'=> 'Days',
    'HOURS'=> 'Hours',
    'MINUTES'=> 'Minutes',
    'SECONDS'=> 'Seconds',


    'BEFORE'=> 'Before',
    'STARTED'=> 'Started',
    'ENDED'=> 'Ended',



    /* ERRORS */
    'CANT_BE_EMPTY'=>'min of 6 chars are required!',
    'MIN_LENGTH'=>'min of 6 chars are required!',
    'NAME_REQUIRED'=>'min of 6 chars are required!',
    'NAME_MIN_LENGTH'=>'Default errorTranslation [update keys]',
    'NAME_VALIDATED'=>'Default errorTranslation [update keys]',

    'EMAIL_REQUIRED'=>'The email field is required',
    'EMAIL_EXISTS'=>'These email is already registered. forgot your password?',
    'EMAIL_NOT_EXISTS'=>"These email is not recorded on the database, have you registered?",
    'EMAIL_BAD_STRUCTURE'=>'Email malformed',

    'NO_ZERO_SELECTION'=>'Must Select one Skill',

    'PASSWORD_REQUIRED'=>'Default errorTranslation [update keys]',
    'PASSWORD_SECURE'=>'Default errorTranslation [update keys]',
    'PASSWORD_MIN_LENGTH'=>'Default errorTranslation [update keys]',

    'PASSWORD_CONFIRM_REQUIRED'=>'Default errorTranslation [update keys]',
    'PASSWORD_CONFIRM_SECURE'=>'Default errorTranslation [update keys]',
    'PASSWORD_CONFIRM_MIN_LENGTH'=>'Default errorTranslation [update keys]',

    'CAPTCHA_REQUIRED'=>'Security check field is required',
    'CAPTCHA_EXCEPTION'=>'Security check failed, phrase  did not match',
    'CAPTCHA_MIN_LENGTH'=>'Default errorTranslation [update keys]',

    'ABOUT_REQUIRED'=>'You sentence must have min of 10char ',
    'ABOUT_EXCEPTION'=>'Security check failed, phrase  did not match',
    'ABOUT_MIN_LENGTH'=>'Default errorTranslation [update keys]',

    "INSECURE_PASS" => "Min 8 char, min 1 lower case, min 1 upper case and a digit or special char",
    "NOT_CONFIRMED" => "Must agree with the terms to proceed",


];

