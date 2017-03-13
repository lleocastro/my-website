<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('asset'))
{
    /**
     * Assets loader.
     *
     * @param string $assetPath
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
     * @param string $name
     * @param int $id
     *
     * @return string
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
     * Scape the malicious scripts.
     *
     * @param string $data
     * @param bool $scape
     *
     * @return string
     */
    function spit($data, $scape = false)
    {
        return (!$scape) ? htmlentities($data) : $data;
    }
}

if (!function_exists('old'))
{
    /**
     * Retrieve old values of form inputs.
     *
     * @param string $value
     *
     * @return string
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
     * @param string $custom_id
     *
     * @return string
     */
    function csrf_field($custom_id = '')
    {
        $CI =& get_instance();
        $token = $CI->security->get_csrf_hash();
        $tokenName = $CI->security->get_csrf_token_name();

        if (empty($custom_id)) {
            $custom_id = $tokenName;
        }

        return "<input type='hidden' id='{$custom_id}' name='{$tokenName}' value='{$token}'/>";
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
            return $CI->auth->get_user_data();
        }

        return null;
    }
}

if (!function_exists('get_validation_errors')) {
    /**
     * Retrieve all validations errors in array.
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

if (!function_exists('analytics')) {
    /**
     * Pixel for site access analysis.
     *
     * @return void
     */
    function analytics()
    {
        $CI =& get_instance();
        $CI->load->library('user_agent');
        $CI->page_views->set_agent($CI->agent->agent_string())
            ->set_addr($CI->input->ip_address())
            ->set_host(filter_input(INPUT_SERVER, 'HTTP_HOST'))
            ->set_route(base_url(uri_string()))
            ->ignores(['127.0.0.1', '177.189.252.180', '177.139.194.143'])
            ->save();
    }
}

if (!function_exists('pagination_styled')) {
    /**
     * Pagination styled with bootstrap css.
     *
     * @return array
     */
    function pagination_styled()
    {
        return [
            'full_tag_open'   => '<nav aria-label="Page navigation"><ul class="pagination">',
            'full_tag_close'  => '</ul></nav>',
            'first_link'      => false,
            'last_link'       => false,
            'first_tag_open'  => '<li>',
            'first_tag_close' => '</li>',
            'prev_link'       => '<span aria-hidden="true">&laquo;</span>',
            'prev_tag_open'   => '<li>',
            'prev_tag_close'  => '</li>',
            'next_link'       => '<span aria-hidden="true">&raquo;</span>',
            'next_tag_open'   => '<li>',
            'next_tag_close'  => '</li>',
            'last_tag_open'   => '<li>',
            'last_tag_close'  => '</li>',
            'cur_tag_open'    => '<li class="active"><a href="#">',
            'cur_tag_close'   => '</a></li>',
            'num_tag_open'    => '<li>',
            'num_tag_close'   => '</li>'
        ];
    }
}

if (!function_exists('blocker')) {
    /**
     *
     *
     * @return mixed
     */
    function blocker()
    {
        $CI =& get_instance();
        $CI->load->model('Blocker_list_model', 'blockers');

        if ($CI->blockers->all() !== null) {
            foreach ($CI->blockers->all() as $blocker) {
                if ($blocker->get_level() == 1) {
                    return false;
                } elseif ($blocker->get_level() == 2) {
                    redirect('blog');
                }
            }
        }

        return false;
    }
}

if (!function_exists('notify')) {
    /**
     *
     *
     * @param string $title
     * @param string $content
     * @param mixed  $attach
     *
     * @return bool
     */
    function notify($title, $content, $attach = null)
    {
        $CI =& get_instance();
        $CI->load->library('email');

        $CI->email->clear(true);
        $CI->email->from(getenv('MAIL_USERNAME'), 'LEOBCASTRO Notify');
        $CI->email->subject($CI->security->xss_clean($title));
        $CI->email->to('leonardo_carvalho@outlook.com');
        $CI->email->message(nl2br($CI->security->xss_clean($content)));

        if ($attach !== null) {
            $CI->email->attach($attach);
        }

        return $CI->email->send();
    }
}

if (!function_exists('sender')) {
    /**
     *
     *
     * @param string $from
     * @param string $name
     * @param string $to
     * @param string $subject
     * @param string $message
     *
     * @return bool
     */
    function sender($from, $name, $to, $subject, $message)
    {
        $CI =& get_instance();
        $CI->load->library('email');

        $CI->email->clear(true);
        $CI->email->from(
            $CI->security->xss_clean($from),
            $CI->security->xss_clean($name)
        );

        $CI->email->subject($CI->security->xss_clean($subject));
        $CI->email->to($CI->security->xss_clean($to));
        $CI->email->message(nl2br($CI->security->xss_clean($message)));

        return $CI->email->send();
    }
}

if (!function_exists('day_message')) {
    /**
     *
     *
     * @return string
     */
    function day_message()
    {
        $data = date('H');

        if (($data >= 1) && ($data <= 12)) {
            return 'Bom dia';
        } elseif (($data >= 12) && ($data <= 18)) {
            return 'Boa tarde';
        } elseif (($data >= 18) && ($data <= 24)) {
            return 'Boa noite';
        }

        return 'Tudo bem?';
    }
}
