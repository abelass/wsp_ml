<?php
/**
 * Plugin My Chacra - Pack basique
 * (c) 2012 My Chacra
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

function mcp_ml_formulaire_charger($flux){
    $form = $flux['args']['form'];
    
    if (($form == 'editer_article' OR $form == 'editer_rubrique') AND $flux['args']['args'][0] == 'oui'){
        $data=$flux['data'];
        //charger les infos de composition dans le formulaire
        $flux['data']['_hidden'].='<input type="hidden" name="composition_branche_lock" value="'.$data['composition_branche_lock'].'"/>';
        $flux['data']['_hidden'].='<input type="hidden" name="composition" value="'.$data['composition'].'"/>';        
        $flux['data']['_hidden'].='<input type="hidden" name="composition_lock" value="'.$data['composition_lock'].'"/>';         
    }
    return $flux;
}

function mcp_ml_pre_insertion($flux){
    $table=$flux['args']['table'];
   if (($table=='spip_articles' OR $table=='spip_rubriques') AND _request('new')=='oui' AND _request('lier_trad')){
        //reprendre les infos de composition
        if($table=='spip_rubriques')$flux['data']['composition_branche_lock'] =  _request('composition_branche_lock');
        $flux['data']['composition'] =  _request('composition');
        $flux['data']['composition_lock'] =  _request('composition_lock');       
              
        }
return $flux;
}

?>
