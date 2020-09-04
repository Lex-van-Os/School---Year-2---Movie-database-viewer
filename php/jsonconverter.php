<?php
class JsonConverter
{
    public $url = "";
    public $input = "";
    public $data = "";

    function __construct($input) // Wordt input
    {
        $this->input = $input; // Wordt input
    }

    function setAPIUrl($url)
    {
        $this->url = $url;
    }

    function Convert() // Wordt input
    {
        $json = file_get_contents($this->url . "" . $this->input); // Wordt input

        return $this->data = json_decode($json, true);
    }

    function getMovieInfo($whichInfo)
    {
        return $this->data[$whichInfo];
    }
}
?>