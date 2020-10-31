<?php
namespace GDO\DSGVO;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Bar;
use GDO\User\GDO_User;
use GDO\Session\GDO_Session;

/**
 * This module adds a popup about cookie usage until understood
 * @author gizmore
 *
 */
final class Module_DSGVO extends GDO_Module
{
	public function onLoadLanguage() { return $this->loadLanguage('lang/dsgvo'); }
	
	public function onIncludeScripts()
	{
		$this->addCSS('css/gdo-dsgvo.css');
	}
	
	public function hookBottomBar(GDT_Bar $bar)
	{
		$bar->addField(GDT_DSGVOPanel::make());
	}
	
	public function hookUserLoggedOut(GDO_User $user)
	{
		GDO_Session::set('gdo-dsgvo', 1); # prevent cookie again
	}
	
}
