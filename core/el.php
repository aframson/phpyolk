<?php

class el
{
    public static function p($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <p '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</p>
        ';
    }

    public static function a($href = '', $attributes = '', $content = ['link here'])
    {
        if (strpos($href, 'http') !== false) {
            echo ' <a href="'.($href).'" '.$attributes.'>';
        } else {
            echo ' <a href="'.Path::rebase($href).'" '.$attributes.'>';
        }
        if (is_array($content)) {
        } else {
            $content = [$content];
        }

        foreach ($content as $result) {
            echo $result;
        }
        echo'</a>
        ';
    }

    public static function nav($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo 'nav '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</nav>
        ';
    }

    public static function html($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <html '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</html>
        ';
    }

    public static function head($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <head '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</head>
        ';
    }

    public static function title($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <title '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</title>
        ';
    }

    public static function body($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <body '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</body>
        ';
    }

    public static function abbr($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <abbr '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</abbr>
        ';
    }

    public static function acronym($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <acronym '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</acronym>
        ';
    }

    public static function address($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <address '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</address>
        ';
    }

    public static function applet($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <applet '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</applet>
        ';
    }

    public static function area($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <area '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</area>
        ';
    }

    public static function article($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <article '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</article>
        ';
    }

    public static function aside($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <aside '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</aside>
        ';
    }

    public static function audio($source = '', $attributes = '', $type = '')
    {
        echo ' <audio '.$attributes.' controls>';
        echo'<source src="'.$source.'" type="'.$type.'">';
        echo'</audio>
        ';
    }

    public static function b($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <b '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</b>
        ';
    }

    public static function base($hre = '', $attributes = '')
    {
        echo ' <base '.$attributes.' href="'.$hre.'">';
    }

    public static function bdi($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <bdi '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</bdi>
        ';
    }

    public static function bdo($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <bdo '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</bdo>
        ';
    }

    public static function big($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <big '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</big>
        ';
    }

    public static function blockquote($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <blockquote '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</blockquote>
        ';
    }

    public static function br($attributes = '')
    {
        echo ' <br '.$attributes.'>';
    }

    public static function button($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <button '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</button>
        ';
    }

    public static function canvas($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <canvas '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</canvas>
        ';
    }

    public static function caption($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <caption '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</caption>
        ';
    }

    public static function center($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <center '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</center>
        ';
    }

    public static function cite($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <cite '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</cite>
        ';
    }

    public static function code($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <code '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</code>
        ';
    }

    public static function col($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <col '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</col>
        ';
    }

    public static function colgroup($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <colgroup '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</colgroup>
        ';
    }

    public static function data($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <data '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</data>
        ';
    }

    public static function datalist($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <datalist '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</datalist>
        ';
    }

    public static function dd($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <dd '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</dd>
        ';
    }

    public static function del($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <del '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</del>
        ';
    }

    public static function details($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <details '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</details>
        ';
    }

    public static function dfn($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <dfn '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</dfn>
        ';
    }

    public static function dialog($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <dialog '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</dialog>
        ';
    }

    public static function dir($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <dir '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</dir>
        ';
    }

    public static function divi($attributes = '', $content = [''])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <div '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</div>
';
    }

    public static function dl($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <dl '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</dl>
        ';
    }

    public static function dt($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <dt '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</dt>
        ';
    }

    public static function em($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <em '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</em>
        ';
    }

    public static function embed($source, $attributes = '')
    {
        echo ' <embed src="'.$source.'" '.$attributes.'>';
    }

    public static function fieldset($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <fieldset '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</fieldset>
        ';
    }

    public static function figure($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <figure '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</figure>
        ';
    }

    public static function figcaption($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <figcaption '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</figcaption>
        ';
    }

    public static function font($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <font '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</font>
        ';
    }

    public static function footer($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <footer '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</footer>
        ';
    }

    public static function form($action = '', $method = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <form '.$action.' '.$method.' '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</form>
        ';
    }

    public static function frame($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <frame '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</frame>
        ';
    }

    public static function frameset($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <frameset '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</frameset>
        ';
    }

    public static function h1($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <h1 '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</h1>
        ';
    }

    public static function h2($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <h2 '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</h2>
        ';
    }

    public static function h3($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <h3 '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</h3>
        ';
    }

    public static function h4($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <h4 '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</h4>
        ';
    }

    public static function h5($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <h5 '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</h5>
        ';
    }

    public static function h6($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <h6 '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</h6>
        ';
    }

    public static function header($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <header '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</header>
        ';
    }

    public static function hr($attributes = '')
    {
        echo ' <hr '.$attributes.'>';
    }

    public static function i($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <i '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</i>
        ';
    }

    public static function iframe($source = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <iframe src="'.$source.'" '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</iframe>
        ';
    }

    public static function img($source = '', $attributes = '')
    {
        echo ' <img src="'.$source.'" '.$attributes.'>';
    }

    public static function image($source = '', $attributes = '')
    {
        echo ' <img src="'.$source.'" '.$attributes.'>';
    }

    public static function pic($source = '', $attributes = '')
    {
        echo ' <img src="'.$source.'" '.$attributes.'>';
    }

    public static function photo($source = '', $attributes = '')
    {
        echo ' <img src="'.$source.'" '.$attributes.'>';
    }

    public static function input($type = 'text', $name = '', $class = '', $id = '', $attributes = '')
    {
        echo ' <input type="'.$type.'" name="'.$name.'" class="'.$class.'" id="'.$id.'" '.$attributes.'>';
    }

    public static function ins($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <ins '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</ins>
        ';
    }

    public static function kbd($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <kbd '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</kbd>
        ';
    }

    public static function keyboard($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <kbd '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</kbd>
        ';
    }

    public static function label($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <label '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</label>
        ';
    }

    public static function legend($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo '<legend '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</legend>
        ';
    }

    public static function li($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <li '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</li>
        ';
    }

    public static function linkatom($href = '', $attributes = '')
    {
        echo '<link rel="alternate" href="'.$href.'" type="application/atom+xml" title="Atom" '.$attributes.'>';
    }

    public static function linkcss($href = '', $attributes = '')
    {
        echo '<link rel="stylesheet" href="'.$href.'" type="text/css" '.$attributes.'>';
    }

    public static function favicon($href = '', $attributes = '', $type = '')
    {
        echo '<link rel="shortcut icon" href="'.$href.'" type="'.$type.'">';
    }

    public static function linkimport($href = '', $attributes = '')
    {
        echo '<link rel="import" href="'.$href.'">';
    }

    public static function linkmanifest($href = '', $attributes = '')
    {
        echo '<link rel="manifest" href="'.$href.'">';
    }

    public static function linkrss($href = '', $attributes = '')
    {
        echo '<link rel="alternate" href="'.$href.'" type="application/rss+xml" title="RSS">';
    }

    public static function linktouchicon($href = '', $attributes = '')
    {
        echo '<link rel="apple-touch-icon" href="'.$href.'">';
    }

    public static function main($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <main '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</main>
        ';
    }

    public static function map($name = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <map '.$name.' '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</map>
        ';
    }

    public static function maparea($href = '', $shape = '', $cordinate = '', $attributes = '')
    {
        echo '<area shape="'.$shape.'" coords="'.$cordinate.'" '.$href.' '.$attributes.'>';
    }

    public static function mark($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <mark '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</mark>
        ';
    }

    public static function meter($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <meter '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</meter>
        ';
    }

    public static function noframes($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <noframes '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</noframes>
        ';
    }

    public static function noscript($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo '<noscript '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</noscript>
        ';
    }

    public static function object($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <object '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</object>
        ';
    }

    public static function ol($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <ol '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</ol>
        ';
    }

    public static function optgroup($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <optgroup '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</optgroup>
        ';
    }

    public static function option($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <option '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</option>
        ';
    }

    public static function output($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <output '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</output>
        ';
    }

    public static function param($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <param '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</param>
        ';
    }

    public static function picture($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <picture '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</picture>
        ';
    }

    public static function pre($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <pre '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</pre>
        ';
    }

    public static function prev($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <pre '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</pre>
        ';
    }

    public static function preview($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <pre '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</pre>
        ';
    }

    public static function progress($value = '', $max = '100', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <progress value="'.$value.'" max="'.$max.'" '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</progress>
        ';
    }

    public static function progressbar($value = '', $max = '100', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <progress value="'.$value.'" max="'.$max.'" '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</progress>
        ';
    }

    public static function q($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <q '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</q>
        ';
    }

    public static function rp($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <rp '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</rp>
        ';
    }

    public static function rt($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <rt '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</rt>
        ';
    }

    public static function ruby($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <ruby '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</ruby>
        ';
    }

    public static function s($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <s '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</s>
        ';
    }

    public static function samp($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <samp '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</samp>
        ';
    }

    public static function script($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <script '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</script>
        ';
    }

    public static function section($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <section '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</section>
        ';
    }

    public static function select($name = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <select '.$name.'  '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</select>
        ';
    }

    public static function small($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <small '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</small>
        ';
    }

    public static function source($source = '', $type = '', $attributes = '')
    {
        echo ' <source src="'.$source.'" type="'.$type.'" '.$attributes.'>';
    }

    public static function span($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <span '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</span>
        ';
    }

    public static function strike($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <strike '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</strike>
        ';
    }

    public static function strong($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <strong '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</strong>
        ';
    }

    public static function style($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <style '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</style>
        ';
    }

    public static function sub($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <sub '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</sub>
        ';
    }

    public static function summary($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <summary '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</summary>
        ';
    }

    public static function sup($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <sup '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</sup>
        ';
    }

    public static function superscript($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <sup '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</sup>
        ';
    }

    public static function svg($width = '', $height = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <svg '.$width.' '.$height.' '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</svg>
        ';
    }

    public static function table($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <table '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</table>
        ';
    }

    public static function tbody($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <tbody '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</tbody>
        ';
    }

    public static function td($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <td '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</td>
        ';
    }

    public static function template($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <template '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</template>
        ';
    }

    public static function textarea($name = '', $rows = '', $cols = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <textarea '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</textarea>
        ';
    }

    public static function tfoot($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <tfoot '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</tfoot>
        ';
    }

    public static function th($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <th '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</th>
        ';
    }

    public static function thead($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <thead '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</thead>
        ';
    }

    public static function time($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <time '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</time>
        ';
    }

    public static function tr($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <tr '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</tr>
        ';
    }

    public static function track($attributes = '')
    {
        echo ' <track '.$attributes.'>';
    }

    public static function tt($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <tt '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</tt>
        ';
    }

    public static function u($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <u '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</u>
        ';
    }

    public static function ul($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <ul '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</ul>
        ';
    }

    public static function var($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <var '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</var>
        ';
    }

    public static function video($source = '', $width = '', $height = '', $type = '', $attributes = '')
    {
        echo ' <video width="'.$width.'" height="$'.$height.'" '.$attributes.' controls>';

        echo '<source src="'.$source.'" type="'.$type.'">
              Your browser does not support the video tag.
            ';

        echo'</video>
        ';
    }

    public static function wbr($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        echo ' <wbr '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</wbr>
        ';
    }

    public static function doctype()
    {
        echo '<!DOCTYPE html>';
    }
}
