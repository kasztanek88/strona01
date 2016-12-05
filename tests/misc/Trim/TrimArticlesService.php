<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 11/28/2016
 * Time: 7:44 PM
 */

namespace AppBundle\Services;


class trimArticles
{
    // wyswietla domyslnie 25 pierwszych wyrazow artykulu
    private $trimmedArr = array();
    public function trimArticle($article, $number = 5)
    {
        $strArr = null;
        if($article==""){
            return "Please insert article";
        }
        $arr = explode(" ", $article);
        $arrcount = count($arr);

        if($number > $arrcount)
        {
            $number = $arrcount;
        }

        for($x = 0; $x<$number; $x++)
        {
            array_push($this->trimmedArr, $arr[$x]);
        }

        $strArr = implode(" ", $this->trimmedArr);
        $strArr .= " ...";

        return $strArr;

    }
}