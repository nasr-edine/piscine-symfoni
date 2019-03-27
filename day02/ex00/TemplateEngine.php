<?php

class TemplateEngine
{
    public function createFile($fileName, $templateName, $parameters)
    {
        $handle = fopen($fileName, 'w') or die('Cannot open file:  '.$fileName);
        $template = file_get_contents($templateName);
        foreach($parameters as $key => $value)
        {
            $template = str_replace('{'.$key.'}', $value, $template);
        }
        fwrite($handle, $template);
        fclose($handle);
    }
}