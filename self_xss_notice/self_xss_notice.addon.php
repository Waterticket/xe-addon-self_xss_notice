<?php
if(!defined("__XE__")) exit;

/**
 * @file self_xss_notice.addon.php
 * @author Waterticket (matthew218@naver.com)
 * @brief Self-XSS notice addon
 */
if($called_position == 'after_module_proc' && Context::getResponseMethod() == "HTML" && $this->module_info->module != "admin")
{
    Context::loadFile(array('./addons/self_xss_notice/console_alert.js', 'body', '', null), true);
}
/* End of file self_xss_notice.addon.php */
/* Location: ./addons/self_xss_notice/self_xss_notice.addon.php */
