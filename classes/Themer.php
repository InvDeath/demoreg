<?php

class Themer {
    public function renderer(array $variables, $template)
    {
        $result = $template;
        foreach($variables as $mark => $variable)
        {
            $result = str_replace('{{' . $mark . '}}', $variable, $result);
        }

        return $result;
    }
} 