<?php

class Info
{
    protected $tag              = "";
    protected $content ="";

    public function getTag ()
    {
        return $this->tag;
    }

    public function setTag ($param)
    {
        $this->tag = $param;
    }
    public function getContent ()
    {
        return $this->content;
    }

    public function setContent ($param)
    {
        $this->content = $param;
    }
}

class Header                     
    extends Info          
{   
    public function __construct($tag,$content)
    {
        echo "<{$tag}>{$content}</{$tag}>";
    }
}
class Main                   
    extends Info          
{   
    public function __construct($tag,$content)
    {
        echo "<{$tag}>{$content}</{$tag}>";
    }
}
class Footer                    
    extends Info          
{   
    public function __construct($tag,$content)
    {
        echo "<{$tag}>{$content}</{$tag}>";
    }
}
// CODE NON MODIFIABLE

// new Info
// new Info

$header = new Header("h1","TITRE1");
$main   = new Main("section", "CONTENU DE MA SECTION");
$footer = new Footer("footer",  "TOUS DROITS RESERVES");

// echo
// <<<CODEHTML

// $header
// $main
// $footer

// CODEHTML;