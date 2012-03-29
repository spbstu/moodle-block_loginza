<?php
/**
 * @author Dmitry Ketov <dketov@gmail.com>
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package block
 * @subpackage loginza
 *
 * Block: LoginZa 
 * 
 *
 */

class block_loginza extends block_base {
    function init() {
        $this->title = get_string('pluginname', 'block_loginza');
    }

    function get_content () {
      global $SESSION, $OUTPUT, $CFG;

      if (!isloggedin() or isguestuser()) {
        ob_start();
        include('loginza_widget.html');
        $this->content->text = ob_get_contents();
        ob_end_clean();
      }

      return $this->content;
    }
}
?>
