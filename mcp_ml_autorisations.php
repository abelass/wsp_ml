<?php
/**
 * Plugin My Chacra - Pack basique
 * (c) 2012 My Chacra
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

/*
 * Un fichier d'autorisations permet de regrouper
 * les fonctions d'autorisations de votre plugin
 */

// declaration vide pour ce pipeline.
function mcp1_autoriser(){}



function autoriser_configurer_mcp1_dist($faire, $type, $id, $qui, $opt) {

	return autoriser('webmestre', $type, $id, $qui, $opt); // seulement les webmestres

}




?>
