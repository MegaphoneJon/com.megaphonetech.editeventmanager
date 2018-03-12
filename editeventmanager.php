<?php

require_once 'editeventmanager.civix.php';
use CRM_Editeventmanager_ExtensionUtil as E;

function editeventmanager_civicrm_buildForm($formName, &$form) {
  if ($form->getAction() == CRM_Core_Action::ADD || $form->getAction() == CRM_Core_Action::UPDATE) {
    if (CRM_Core_Permission::check('edit all events')) {
      $form->addEntityRef('created_id', ts('Event Manager'), ['placeholder' => ('- You -')]);
      CRM_Core_Region::instance('form-body')->add(['template' => 'CRM/Event/Form/ManageEventSnippet.tpl']);
      CRM_Core_Resources::singleton()->addScriptFile('com.megaphonetech.editeventmanager', 'js/editeventmanager.js');
    }
  }
}
/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function editeventmanager_civicrm_config(&$config) {
  _editeventmanager_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function editeventmanager_civicrm_xmlMenu(&$files) {
  _editeventmanager_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function editeventmanager_civicrm_install() {
  _editeventmanager_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function editeventmanager_civicrm_postInstall() {
  _editeventmanager_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function editeventmanager_civicrm_uninstall() {
  _editeventmanager_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function editeventmanager_civicrm_enable() {
  _editeventmanager_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function editeventmanager_civicrm_disable() {
  _editeventmanager_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function editeventmanager_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _editeventmanager_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function editeventmanager_civicrm_managed(&$entities) {
  _editeventmanager_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function editeventmanager_civicrm_caseTypes(&$caseTypes) {
  _editeventmanager_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function editeventmanager_civicrm_angularModules(&$angularModules) {
  _editeventmanager_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function editeventmanager_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _editeventmanager_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function editeventmanager_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function editeventmanager_civicrm_navigationMenu(&$menu) {
  _editeventmanager_civix_insert_navigation_menu($menu, NULL, array(
    'label' => E::ts('The Page'),
    'name' => 'the_page',
    'url' => 'civicrm/the-page',
    'permission' => 'access CiviReport,access CiviContribute',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _editeventmanager_civix_navigationMenu($menu);
} // */
