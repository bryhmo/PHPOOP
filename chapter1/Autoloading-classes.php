<?php declare(strict_types=1);
/* 
Many developers writing object-oriented applications create one PHP source file per class definition.
One of the biggest annoyances is having to write a long list of needed includes at the beginning of each script (one for each class).

The spl_autoload_register() function registers any number of autoloaders, 
enabling for classes and interfaces to be automatically loaded if they are currently not defined. By registering autoloaders, PHP is given a last chance to load the class or interface before it fails with an error

*/

/* spl_autoload() ;
spl_autoload_call();

spl_autoload_register(?callable $callback = null, bool $throw = true, bool $prepend = false): bool */


function my_AutoLoader($className){
    include 'classes/' .$className. '.php';
}
spl_autoload_register('my_AutoLoader');

//or using an anonymous function1
spl_autoload_register(function($The_Class_Name){
    include 'classes/'.$class. '.php';
});


//using the anonymous function2
spl_autoload_register(function($The_Name_of_class){
    include '/classes' .$The_Name_of_class. '.php';
});





/*  spl_autoload(string $class, ?string $file_extensions = null): void

// Your custom class dir
define('CLASS_DIR', 'class/')

// Add your class dir to include path
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);

// You can use this trick to make autoloader look for commonly used "My.class.php" type filenames
spl_autoload_extensions('.class.php');

// Use default autoload implementation
spl_autoload_register();


*/

?>

<!-- One small example that shows how you can use spl_autoload function in your MVC, Framewrk's applications. For example, will use the Loader class. -->
 

<?php

 class Loader
 {
        
    /**
     * Controller Directory Path
     *
     * @var Array
     * @access protected
     */
    protected $_controllerDirectoryPath = array();
    
    /**
     * Model Directory Path
     *
     * @var Array
     * @access protected
     */
    protected $_modelDirectoryPath = array();
    
    /**
     * Library Directory Path
     *
     * @var Array
     * @access protected
     */
    protected $_libraryDirectoryPath = array();


    protected $_viewDirectoryPath = array();
    
    
    /** 
     * Constructor
     * Constant contain my full path to Model, View, Controllers and Lobrary-
     * Direcories.
     *
     * @Constant MPATH,VPATH,CPATH,LPATH
     */
     
    public function __construct()
    {
        $this->_modelDirectoryPath      = MPATH;
        $this->_viewDirectoryPath        = VPATH;
        $this->_controllerDirectoryPath = CPATH;
        $this->_libraryDirectoryPath     = LPATH;
    
        spl_autoload_register(array($this,'load_controller'));
        spl_autoload_register(array($this,'load_model'));
        spl_autoload_register(array($this,'load_library'));
   
        print_r('debug',"Loader Class Initialized");
    }

    /** 
     *-----------------------------------------------------
     * Load Library
     *-----------------------------------------------------
     * Method for load library.
     * This method return class object.
     *
     * @library String
     * @param String
     * @access public
     */    
    public function load_library($library, $param = null)
    {
        if (is_string($library)) {
            return $this->initialize_class($library);
        }
        if (is_array($library)) {
            foreach ($library as $key) {
                return $this->initialize_class($library);
            }
        }                
    }

    /** 
     *-----------------------------------------------------
     * Initialize Class
     *-----------------------------------------------------
     * Method for initialise class
     * This method return new object. 
     * This method can initialize more class using (array)
     *
     * @library String|Array
     * @param String
     * @access public
     */    
    public function initialize_class($library)
    {
        try {
            if (is_array($library)) {
                foreach($library as $class) {
                    $arrayObject =  new $class;
                }            
                return $this;
            }
            if (is_string($library)) {
                $stringObject = new $library;
            }else {
                throw new ISException('Class name must be string.');
            }
            if (null == $library) {
                throw new ISException('You must enter the name of the class.');
            }
        } catch(Exception $exception) {
            echo $exception;
        }
    }    
    
    /**
     * Autoload Controller class
     *
     * @param  string $class
     * @return object
     */
     
    public function load_controller($controller)
    {
        if ($controller) {
            set_include_path($this->controllerDirectoryPath);
            spl_autoload_extensions('.php');
            spl_autoload($class);
        }
    }    
    

      /**
     * Autoload Model class
     *
     * @param  string $class
     * @return object
     */
     
    public function load_models($model)
    {
        if ($model) {
            set_include_path($this->modelDirectoryPath);
            spl_autoload_extensions('.php');
            spl_autoload($class);
        }
    }    
    
      /**
     * Autoload Library class
     *
     * @param  string $class
     * @return object
     */
     
    public function load_library($library)
    {
        if ($library) {
            set_include_path($this->libraryDirectoryPath);
            spl_autoload_extensions('.php');
            spl_autoload($class);
        }
    }
    

    
 }
 
 ?>

<?php

// Your custom class dir
define('CLASS_DIR', 'class/')

// Add your class dir to include path
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);

// You can use this trick to make autoloader look for commonly used "My.class.php" type filenames
spl_autoload_extensions('.class.php');

// Use default autoload implementation
spl_autoload_register();
?>