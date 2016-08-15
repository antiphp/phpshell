<?php
/**
 * class file
 */
namespace AntiPhp\PhpShell\Shell\Adapter;

class Stdin implements AdapterInterface
{
    /**
     * @desc PHP CLI: How to read a single character of input from the TTY (without waiting for the enter key)?
     * @link http://stackoverflow.com/a/21628935/1286635
     *
     * @return string
     */
    public function readCharwise()
    {
        readline_callback_handler_install('', function() { });
        while (true) {
            $r = array(STDIN);
            $w = NULL;
            $e = NULL;
            $n = stream_select($r, $w, $e, null);
            if ($n && in_array(STDIN, $r)) {
                $c = stream_get_contents(STDIN, 1);
                readline_callback_handler_remove();
                return $c;
            }
        }
    }

    public function readLineCharwise()
    {
        static $line = '';
        $char = $this->readCharwise();
        if ($char !== PHP_EOL) {
            $line .= $char;
        } else {
            $line = '#';
        }
        return $line;
    }
}