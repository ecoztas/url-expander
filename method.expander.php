<?php

if (!function_exists('expand')) {
    /**
     * Expander for tiny url.
     * @param  string $url 
     * @return string
     *
     * @example expand('https://tinyurl.com/ycrtdwxa');
     */
    function expand(string $url): string
    {
        $curl = null;
        $response = '';
        $matches = '';
        $expanded = array();
        if (!function_exists('curl_version')) {
            trigger_error('cURL is not found!');
            exit();
        } else {
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($curl, CURLOPT_HEADER, TRUE);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, FALSE);
            $response = curl_exec($curl);
            preg_match_all('/^Location:(.*)$/mi', $response, $matches);
            curl_close($curl);

            if (!empty($matches[1][0])) {
                $expanded = $matches[1][0];
            } else {
                $expanded = $url;
            }
        }

        return($expanded);
    }
}
