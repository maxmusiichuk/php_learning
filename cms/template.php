<?php

class template_class //class template
{

    var $values = array(); //variables of template
    var $html; //html code
// function for loading of template
    function get_tpl($tpl_name)
    {
        if (empty($tpl_name)) {
            return false;
        } else {
            $this->html = join('',file($tpl_name));
        }
    }
//function for setting values
    function set_value($key, $var){
        $key = '{'.$key.'}';
        $this->values[$key] = $var;
    }
//parse of template
    function tpl_parse(){
        foreach ($this->values as $find => $replace){
            $this->html = str_replace($find, $replace, $this->html);
        }
    }

}
//class example
$tpl = new template_class;