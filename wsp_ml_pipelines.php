<?php
/**
 * Plugin My Chacra - Pack basique
 * (c) 2012 My Chacra
 * Licence GNU/GPL
 */
if (!defined('_ECRIRE_INC_VERSION'))
	return;
function wsp_ml_formulaire_charger($flux) {
	$form = $flux['args']['form'];

	if (($form == 'editer_article' or $form == 'editer_rubrique') and $flux['args']['args'][0] == 'oui') {
		$data = $flux['data'];
		// charger les infos de composition dans le formulaire
		$flux['data']['_hidden'] .= '<input type="hidden" name="composition_branche_lock" value="' . $data['composition_branche_lock'] . '"/>';
		$flux['data']['_hidden'] .= '<input type="hidden" name="composition" value="' . $data['composition'] . '"/>';
		$flux['data']['_hidden'] .= '<input type="hidden" name="composition_lock" value="' . $data['composition_lock'] . '"/>';
	}
	return $flux;
}

