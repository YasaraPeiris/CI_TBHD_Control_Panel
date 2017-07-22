<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: silvajy
 * Date: 25/08/2015
 * Time: 15:38
 */
require_once ('reportico/reportico_module.php');

class Reportico {

    private $engine = false;
    private $CI     = false;
    /**
     * Constructor - Sets Reportico Preferences
     *
     * The constructor can be passed an array of config values
     */

    public function __construct(array $config = array())
    {
        $this->CI =&get_instance();
        $this->CI->load->helper('url');

        $this->engine = new Reportico_module();
        $config['url_path_to_assets'] =  base_url($config['url_path_to_assets']);
        $config['templates_folder'] = APPPATH . $config['templates_folder'];
        $config['compiled_templates_folder'] = APPPATH . $config['compiled_templates_folder'];

        if (count($config) > 0) {
            $this->initialize($config);
        }

        log_message('debug', "Reportico Library Initialized");
    }

    /**
     * Initialize preferences
     *
     * @access	public
     * @param	array
     * @return	void
     */
    protected function initialize($config = array()){
        foreach ($config as $key => $val) {
            if (isset($this->engine->$key)) {
                $method = 'set_'.$key;
                if (method_exists($this, $method)) {
                    $this->engine->$method($val);
                }
                else {
                    $this->$key = $val;
                }
            }
        }
    }

    public function __get($name) {
        return $this->engine->$name;
    }

    public function __set($name, $value) {
        $this->engine->$name = $value;
    }

    // Generate output
    public function execute() {
        $this->engine->execute();
    }

}