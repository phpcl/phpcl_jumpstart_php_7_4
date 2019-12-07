<?php

class VariableStream
{

    protected $position  = 0;

    public function stream_open($path, $mode, $options, &$opened_path)
    {
        if (stripos($mode, 'a') !== FALSE) {
            $this->position = strlen($GLOBALS['stream']);
        } else {
            $GLOBALS['stream'] = '';
            $this->position = 0;
        }
        return true;
    }

    public function stream_read($count)
    {
        $val = substr($GLOBALS['stream'], $this->position, $count);
        $this->position += $count;
        $this->position = ($this->position > strlen($GLOBALS['stream'])) ? strlen($GLOBALS['stream']) : $this->position;
        return $val;
    }

    public function stream_write($data)
    {
        $count = strlen($data);
        $GLOBALS['stream'] .= (string) $data;
        $this->position += $count;
        return $count;
    }

    public function stream_tell()
    {
        return $this->position;
    }

    public function stream_eof()
    {
        return $this->position >= strlen($GLOBALS['stream']);
    }

    public function stream_seek($offset, $whence)
    {
        $this->position = $offset;
        $result = $this->stream_eof();
        $this->position = ($this->position > strlen($GLOBALS['stream'])) ? strlen($GLOBALS['stream']) : $this->position;
        return $result;
    }

    public function stream_metadata($path, $option, $var)
    {
        return true;
    }

    public function stream_stat()
    {
        return [];
    }
}
