<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('asset'))
{
    /**
     * Assets loader.
     *
     * @param  string $assetPath
     *
     * @return string
     */
    function asset($assetPath)
    {
        $path = base_url($assetPath);
        return $path;
    }
}

if (!function_exists('route'))
{
    /**
     * Route alias to call controller methods
     *
     * @param	string $name
     * @param   int    $id
     *
     * @return	string
     */
    function route($name, $id = null)
    {
        $name = str_ireplace('.', DS, $name);
        $url  = ($id != null) ? base_url($name) . DS . "{$id}" : base_url($name);
        return $url;
    }
}

if (!function_exists('spit'))
{
    /**
     *
     *
     * @param	string $data
     * @param   bool   $scape
     *
     * @return	string
     */
    function spit($data, $scape = false)
    {
        return (!$scape) ? htmlentities($data) : $data;
    }
}

if (!function_exists('old'))
{
    /**
     *
     *
     * @param	string $value
     *
     * @return	string
     */
    function old($value)
    {
        return set_value($value);
    }
}

if (!function_exists('vdump')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed $data
     * @return void
     */
    function vdump($data)
    {
        Symfony\Component\VarDumper\VarDumper::dump($data);
        die(1);
    }
}

if (!function_exists('ie_support_field')) {
    /**
     * Generate a script for support for IE in form.
     *
     * @return string
     */
    function ie_support_field()
    {
        $field = "<!--[if lte IE 8]>\n";
            $field .= '<script src='.'"'. asset('js/ie-support.min.js') .'"'.'></script>'."\n";
        $field .= "<![endif]-->\n";

        return $field;
    }
}

if (! function_exists('csrf_field')) {
    /**
     * Generate CSRF token form.
     *
     * @return string
     */
    function csrf_field()
    {
        $CI =& get_instance();
        $token = $CI->security->get_csrf_hash();
        $tokenName = $CI->security->get_csrf_token_name();

        return "<input type='hidden' id='{$tokenName}' name='{$tokenName}' value='{$token}'/>";
    }
}

if (!function_exists('auth_data')) {
    /**
     * Returns some data from the current user.
     *
     * @return object
     */
    function auth_data()
    {
        $CI =& get_instance();
        if($CI->auth->can()) {
            $obj = new stdClass();
            $obj->id = $CI->auth->get_user_data()['auth_user_id'];
            $obj->name = $CI->auth->get_user_data()['auth_user_name'];
            $obj->lastname = $CI->auth->get_user_data()['auth_user_lastname'];
            $obj->email = $CI->auth->get_user_data()['auth_user_email'];

            return $obj;
        }

        return null;
    }
}

if (!function_exists('get_validation_errors')) {
    /**
     *
     * @return array
     */
    function get_validation_errors_in_array()
    {
        $errors = trim(validation_errors());
        $errors = str_ireplace('<p>', '', $errors);
        $errors = str_ireplace('</p>', '', $errors);
        return array_filter(explode("\n", $errors));
    }
}

