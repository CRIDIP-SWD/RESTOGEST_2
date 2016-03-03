<?php
/**
 * Created by PhpStorm.
 * User: SWD
 * Date: 01/03/2016
 * Time: 11:34
 */

namespace App\GENERAL;


class constante
{
    const HTTP              = "http://";
    const URL               = "gestcom.cridip.com/";
    const ASSETS            = "assets/";
    const NOM_SITE          = "GESTCOM";
    const SOURCES           = "http://ns342142.ip-5-196-76.eu/sources/gc/";
    const MAINTENANCE       = 0;
    const IP_MAIN           = "109.190.224.161";
    const IP_SRC            = "ns342142.ip-5-196-76.eu";
    /*
     * ADRESSE BUREAU = 109.190.224.161
     * ADRESSE MAISON = 109.190.65.252
     */
    /**
     * @param $dos array Permet de parser sous forme string le tableau array=$dos
     * @return string retourne un format standard de link HTML
     */
    private static function parseArray($dos)
    {
        return implode("/", $dos);
    }

    /**
     * @param array $dos Il permet d'envoyer à la fonction la liste des dossiers à parcourir sous forme de tableau
     * @param bool|true $assets Permet d'insérer de manière automatique le dossier 'assets'
     * @param bool $sources Renvoie les informations vers le fichiers DataSources de CRIDIP
     * @return string Suivant le bool $assets, il retourne la redirection sous format de lien(string)
     */
    public static function getUrl($dos = array(), $assets = true, $sources = false)
    {
        if($assets === true)
        {
            return static::HTTP.static::URL.static::ASSETS.static::parseArray($dos);
        }elseif($sources === true){
            return static::SOURCES;
        }else{
            return static::HTTP.static::URL.static::parseArray($dos);
        }

    }
}