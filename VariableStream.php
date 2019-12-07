<?php

class VariableStream
{

    protected $position  = 0;
    protected $stream    = '';

    function stream_open($path, $mode, $options, &$opened_path)
    {
        if (stripos($mode, 'a') !== FALSE) {
            $this->position = strlen($this->stream);
        } else {
            $this->position = 0;
        }
        return true;
    }

    function stream_read($count)
    {
        $val = substr($this->stream, $this->position, $count);
        $this->position += $count;
        $this->position = ($this->position > strlen($this->stream)) ? strlen($this->stream) : $this->position;
        return $val;
    }

    function stream_write($data)
    {
        $count = strlen($data);
        $this->stream .= (string) $data;
        $this->position += $count;
        return $count;
    }

    function stream_tell()
    {
        return $this->position;
    }

    function stream_eof()
    {
        return $this->position >= strlen($this->stream);
    }

    function stream_seek($offset, $whence)
    {
        $this->position = $offset;
        $result = $this->stream_eof();
        $this->position = ($this->position > strlen($this->stream)) ? strlen($this->stream) : $this->position;
        return $result;
    }

    function stream_metadata($path, $option, $var)
    {
        return true;
    }
}
