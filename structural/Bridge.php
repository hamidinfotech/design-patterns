<?php
/**
 * Created by PhpStorm.
 * User: h.hosseini
 * Date: 10/4/2018
 * Time: 11:24 AM
 */

interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent();
}

class About implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return 'About page in ' . $this->theme->getColor();
    }
}

class Careers implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return 'Careers page in ' . $this->theme->getColor();
    }

}


interface Theme
{
    public function getColor();
}

class DarkTheme implements Theme
{
    public function getColor()
    {
        return 'Dark Black';
    }
}

class LightTheme implements Theme
{
    public function getColor()
    {
        return 'Off White';
    }
}

class AquaTheme implements Theme
{
    public function getColor()
    {
        return 'Light Blue';
    }
}



$darkTheme = new DarkTheme();

$about = new About($darkTheme);
$careers = new Careers($darkTheme);

echo $about->getContent();
echo $careers->getContent();