<?php

class MiniatureIoController extends Controller
{

    private $moduleName = "miniature_io";

    public function contentFilter($html)
    {
        preg_match_all("/\[miniature=(.+)]/i", $html, $matches);
        if (count($matches[0]) > 0) {
            for ($i = 0; $i < count($matches[0]); $i ++) {
                $replaceCode = $matches[0][$i];
                $url = $matches[1][$i];
                ViewBag::set("url", $url);
                $imageHtml = trim(Template::executeModuleTemplate($this->moduleName, "image.php"));
                $html = str_replace($replaceCode, $imageHtml, $html);
            }
        }
        return $html;
    }
}