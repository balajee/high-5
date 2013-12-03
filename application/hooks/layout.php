<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout extends CI_Hooks
{
    function show_layout()
    {
        global  $OUT;

        $this->CI =& get_instance();
        $output = $this->CI->output->get_output();

        if ($this->CI->layout == "Yes"){
			//define default layout on
			$default = BASEPATH . '../application/layouts/main.php';

			$layout = $this->CI->load->file($default, true);

			//change string "{body}" from view output
			$layout = str_replace("{body}", $output, $layout);

			//add title, define in controllers
            $title=NULL;
            if(isset($this->CI->title)){
                $title = $this->CI->title;
				$title = "| ".ucfirst($title);
			}

			//change string "{title}" with paremeter on controller
            $layout = str_replace("{title}", $title, $layout);
        }else
            $layout = $output;

        /* @var $OUT <type> */
        $OUT->_display($layout);
    }
}  

?>