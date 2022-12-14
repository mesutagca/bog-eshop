<?php

use Illuminate\Support\Facades\File;

if (!function_exists('is_connected')) {
    function is_connected()
    {
        $connected = @fsockopen("www.google.com", 80);
        if ($connected) {
            $is_conn = true;
            fclose($connected);
        } else {
            $is_conn = false;
        }
        return $is_conn;
    }
}

if (!function_exists('envu')) {
    function envu($data = array())
    {
        foreach ($data as $key => $value) {
            if (env($key) === $value) {
                unset($data[$key]);
            }
        }
        if (!count($data)) {
            return false;
        }
        // write only if there is change in content
        $env = file_get_contents(base_path() . '/.env');
        $env = explode("\n", $env);
        foreach ((array)$data as $key => $value) {
            foreach ($env as $env_key => $env_value) {
                $entry = explode('=', $env_value, 2);
                if ($entry[0] === $key) {
                    $env[$env_key] = $key . '=' . (is_string($value) ? '"' . $value . '"' : $value);
                } else {
                    $env[$env_key] = $env_value;
                }
            }
        }
        $env = implode("\n", $env);
        file_put_contents(base_path() . '/.env', $env);
        return true;
    }

}

if (!function_exists('clearAllStorage')) {
    function clearAllStorage()
    {
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('key:generate');
        $dirs = [
            '/storage/debugbar', '/storage/views', '/storage/logs', '/storage/framework/sessions'
        ];
        foreach ($dirs as $dir) {
            $file_dir = base_path() . $dir;
            foreach (glob($file_dir . '/*') as $file) {
                if (!is_dir($file)) {
                    unlink($file);
                }
            }
        }
    }
}

if (!function_exists('checkDBConnection')) {
    function checkDBConnection()
    {
        $link = @mysqli_connect(
            config('database.connections.' . env('DB_CONNECTION') . '.host'),
            config('database.connections.' . env('DB_CONNECTION') . '.username'),
            config('database.connections.' . env('DB_CONNECTION') . '.password')
        );
        if ($link)
            return mysqli_select_db($link, config('database.connections.' . env('DB_CONNECTION') . '.database'));
        return false;
    }
}

if (!function_exists('getVar')) {
    function getVar($list)
    {
        $file = resource_path('vars/' . $list . '.json');

        if (File::exists($file)) {
            return json_decode(file_get_contents($file), true);
        }
        return [];
    }
}

if (!function_exists('setVar')) {
    function setVar($file, $data)
    {
        file_put_contents(resource_path('vars/') . $file . '.json', json_encode($data));
        return;
    }
}


if (!function_exists('slugify')) {

    function slugify($str, $options = array())
    {
        $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
        $defaults = array(
            'delimiter' => '-',
            'limit' => null,
            'lowercase' => true,
            'replacements' => array(),
            'transliterate' => true
        );
        $options = array_merge($defaults, $options);
        $char_map = array(
            // Latin
            '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'AE', '??' => 'C',
            '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I',
            '??' => 'D', '??' => 'N', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O',
            '??' => 'O', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'Y', '??' => 'TH',
            '??' => 'ss',
            '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'ae', '??' => 'c',
            '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i',
            '??' => 'd', '??' => 'n', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o',
            '??' => 'o', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'y', '??' => 'th',
            '??' => 'y',
            // Latin symbols
            '??' => '(c)',
            // Greek
            '??' => 'A', '??' => 'B', '??' => 'G', '??' => 'D', '??' => 'E', '??' => 'Z', '??' => 'H', '??' => '8',
            '??' => 'I', '??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => '3', '??' => 'O', '??' => 'P',
            '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'Y', '??' => 'F', '??' => 'X', '??' => 'PS', '??' => 'W',
            '??' => 'A', '??' => 'E', '??' => 'I', '??' => 'O', '??' => 'Y', '??' => 'H', '??' => 'W', '??' => 'I',
            '??' => 'Y',
            '??' => 'a', '??' => 'b', '??' => 'g', '??' => 'd', '??' => 'e', '??' => 'z', '??' => 'h', '??' => '8',
            '??' => 'i', '??' => 'k', '??' => 'l', '??' => 'm', '??' => 'n', '??' => '3', '??' => 'o', '??' => 'p',
            '??' => 'r', '??' => 's', '??' => 't', '??' => 'y', '??' => 'f', '??' => 'x', '??' => 'ps', '??' => 'w',
            '??' => 'a', '??' => 'e', '??' => 'i', '??' => 'o', '??' => 'y', '??' => 'h', '??' => 'w', '??' => 's',
            '??' => 'i', '??' => 'y', '??' => 'y', '??' => 'i',
            // Turkish
            '??' => 'S', '??' => 'I', '??' => 'C', '??' => 'U', '??' => 'O', '??' => 'G',
            '??' => 's', '??' => 'i', '??' => 'c', '??' => 'u', '??' => 'o', '??' => 'g',
            // Russian
            '??' => 'A', '??' => 'B', '??' => 'V', '??' => 'G', '??' => 'D', '??' => 'E', '??' => 'Yo', '??' => 'Zh',
            '??' => 'Z', '??' => 'I', '??' => 'J', '??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => 'O',
            '??' => 'P', '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'U', '??' => 'F', '??' => 'H', '??' => 'C',
            '??' => 'Ch', '??' => 'Sh', '??' => 'Sh', '??' => '', '??' => 'Y', '??' => '', '??' => 'E', '??' => 'Yu',
            '??' => 'Ya',
            '??' => 'a', '??' => 'b', '??' => 'v', '??' => 'g', '??' => 'd', '??' => 'e', '??' => 'yo', '??' => 'zh',
            '??' => 'z', '??' => 'i', '??' => 'j', '??' => 'k', '??' => 'l', '??' => 'm', '??' => 'n', '??' => 'o',
            '??' => 'p', '??' => 'r', '??' => 's', '??' => 't', '??' => 'u', '??' => 'f', '??' => 'h', '??' => 'c',
            '??' => 'ch', '??' => 'sh', '??' => 'sh', '??' => '', '??' => 'y', '??' => '', '??' => 'e', '??' => 'yu',
            '??' => 'ya',
            // Ukrainian
            '??' => 'Ye', '??' => 'I', '??' => 'Yi', '??' => 'G',
            '??' => 'ye', '??' => 'i', '??' => 'yi', '??' => 'g',
            // Czech
            '??' => 'C', '??' => 'D', '??' => 'E', '??' => 'N', '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'U',
            '??' => 'Z',
            '??' => 'c', '??' => 'd', '??' => 'e', '??' => 'n', '??' => 'r', '??' => 's', '??' => 't', '??' => 'u',
            '??' => 'z',
            // Polish
            '??' => 'A', '??' => 'C', '??' => 'e', '??' => 'L', '??' => 'N', '??' => 'o', '??' => 'S', '??' => 'Z',
            '??' => 'Z',
            '??' => 'a', '??' => 'c', '??' => 'e', '??' => 'l', '??' => 'n', '??' => 'o', '??' => 's', '??' => 'z',
            '??' => 'z',
            // Latvian
            '??' => 'A', '??' => 'C', '??' => 'E', '??' => 'G', '??' => 'i', '??' => 'k', '??' => 'L', '??' => 'N',
            '??' => 'S', '??' => 'u', '??' => 'Z',
            '??' => 'a', '??' => 'c', '??' => 'e', '??' => 'g', '??' => 'i', '??' => 'k', '??' => 'l', '??' => 'n',
            '??' => 's', '??' => 'u', '??' => 'z'
        );
        $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
        if ($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
        $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
        $str = trim($str, $options['delimiter']);
        return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
    }
}

if (!function_exists('toWord')) {
    function toWord($string)
    {
        // 'create-user', 'Create User'
        $string = str_replace('_', ' ', $string);
        $string = str_replace('-', ' ', $string);
        return ucwords($string);
    }
}
if (!function_exists('flash')) {
    function flash($title = null, $message = null)
    {
        $flash = app(Flash::class);
        if (func_num_args() === 0) {
            return $flash;
        }
        return $flash->info($title, $message);
    }
}

if (!function_exists('flash_toaster')) {
    function flash_toaster($title = null, $message = null)
    {
        $flash = app(Toaster::class);
        if (func_num_args() === 0) {
            return $flash;
        }
        return $flash->flash_toaster($title, $message);
    }
}
if (!function_exists('subString')) {
    function subString($text, $length)
    {
        $text = substr($text, 0, $length) . "...";
        $lastText = strrchr($text, " ");
        $text = str_replace($lastText, " ...", $text);
        return $text;
    }
}
if (!function_exists('getStartOfDate')) {
    function getStartOfDate($date)
    {
        return date('Y-m-d', strtotime($date)) . ' 00:00';
    }
}
if (!function_exists('getEndOfDate')) {
    function getEndOfDate($date)
    {
        return date('Y-m-d', strtotime($date)) . ' 23:59';
    }
}


if (!function_exists('unHtmlSpecialChars')) {
    function unHtmlSpecialChars($string)
    {
        $string = str_replace("&#286;", "??", $string);
        $string = str_replace("&#287;", "??", $string);
        $string = str_replace("&#304;", "??", $string);
        $string = str_replace("&#305", "??", $string);
        $string = str_replace("&#350;", "??", $string);
        $string = str_replace("&#351", "??", $string);
        $string = str_replace("&ccedil;", "??", $string);
        $string = str_replace("&Ccedil;", "??", $string);
        $string = str_replace("&yacute;", "??", $string);
        $string = str_replace("&Ouml;", "??", $string);
        $string = str_replace('&ouml;', '??', $string);
        $string = str_replace("&Uuml;", "??", $string);
        $string = str_replace("&ETH;", "??", $string);
        $string = str_replace("&THORN;", "??", $string);
        $string = str_replace("&Yacute;", "??", $string);
        $string = str_replace("&thorn;", "??", $string);
        $string = str_replace("&eth;", "??", $string);
        $string = str_replace("&uuml;", "??", $string);
        $string = str_replace("&amp;", "&", $string);
        $string = str_replace("&nbsp;", " ", $string);
        $string = str_replace('', '\'', $string);
        $string = str_replace('&#039;', '\'', $string);
        $string = str_replace('[b]', '', $string);
        $string = str_replace('[/b]', '', $string);
        $string = str_replace('&quot;', '"', $string);
        $string = str_replace('&lt;', '<', $string);
        $string = str_replace('&gt;', '>', $string);
        $string = str_replace('&auml;', '??', $string);
        $string = str_replace('&Auml;', '??', $string);
        $string = str_replace('[img]', '', $string);
        $string = str_replace('[/img]', '', $string);
        return $string;
    }
}

if (!function_exists('fromStudlyCase')) {
    //Bu fonksiyon DenemeDeneme ??eklinde verilen studlyCase tipindeki bir de??eri Deneme Deneme ??eklinde bo??luk koyarak yazar
    function fromStudlyCase($value)
    {
        return implode(' ', preg_split('/(?<=[a-z])(?=[A-Z])|(?=[A-Z][a-z])/', $value, -1, PREG_SPLIT_NO_EMPTY));
    }
}

if (!function_exists('replaceSpaces')) {
    //Bu fonksiyon iki tane space'i bir taneye d??????r??r
    function replaceSpaces($value)
    {
        return str_replace(' ', '', $value);
    }
}

if (!function_exists('randomString')) {
    function randomString($length, $type = 'token')
    {
        if ($type === 'password') {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        } elseif ($type === 'username') {
            $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        } else {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        }
        $token = substr(str_shuffle($chars), 0, $length);
        return $token;
    }
}

if (!function_exists('addJsonFileInVars')) {
    function addJsonFileInVars($file)
    {
        $chMod = 0775;
        $varsPath = base_path() . '/resources/vars/';
        //vars klas??r?? yoksa
        if (!file_exists($varsPath)) {
            File::makeDirectory($varsPath, $chMod, true, true);
        }
        // vars i??indeki dosyalar silindiginde
        $json = (object)[];
        $fileName = $varsPath . $file . '.json';
        if (!file_exists($fileName)) {
            file_put_contents($fileName, $json);
        }
        return $fileName;
    }
}

if (!function_exists('setAddedThemes')) {
    function setAddedThemes()
    {
        $file = 'added-themes';
        $config = getAddedThemes();
        setVar($file, $config);
    }
}

if (!function_exists('getAddedThemes')) {
    function getAddedThemes()
    {
        $config = [];
        $themePaths = 'resources/views/themes';
        foreach (File::directories(base_path($themePaths)) as $type) {
            //return basename($type); //admins
            foreach (File::directories($type) as $category) {
                //return $category;
                foreach (File::directories($category) as $site) {
                    //return $site;
                    $config[basename($type)][basename($category)][] = basename($site);
                }
            }
        }
        return $config;
    }
}


