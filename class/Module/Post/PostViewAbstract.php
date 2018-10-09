<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

use JNews\Module\ModuleViewAbstract;

abstract Class PostViewAbstract extends ModuleViewAbstract
{
    public function is_on_editor()
    {
        if(function_exists('jeg_is_frontend_vc') && jeg_is_frontend_vc())
        {
            return true;
        }

        if(isset($_REQUEST['action']))
        {
            if(( $_REQUEST['action'] === 'elementor' || $_REQUEST['action'] === 'elementor_ajax' ))
            {
                return true;
            }
        }

        return false;
    }

    public function render_module($attr, $column_class)
    {
        if($this->is_on_editor())
        {
            return $this->render_module_back($attr, $column_class);
        } else {
            return $this->render_module_front($attr, $column_class);
        }
    }

    public abstract function render_module_back($attr, $column_class);
    public abstract function render_module_front($attr, $column_class);
}
