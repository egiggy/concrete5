<? 
defined('C5_EXECUTE') or die("Access Denied.");
?>
</div>

<? 

// simple file that controls the adding of blocks.

// $blockTypes is an array using the btID as the key and btHandle as the value.
// It is defined within Area->_getAreaAddBlocks(), which then calls a 
// function in Content to include the file

// note, we're also passed an area & collection object from the original function

$arHandle = $a->getAreaHandle();
$arHandleTrunc = strtolower(preg_replace("/[^0-9A-Za-z]/", "", $a->getAreaHandle()));

$c = $a->getAreaCollectionObject();
$cID = $c->getCollectionID();
$u = new User();
$ap = new Permissions($a);
$cp = new Permissions($c);

if (!$c->isArrangeMode()) { ?>

<div id="a<?=$a->getAreaID()?>controls" class="ccm-add-block ccm-ui">
<div class="dropdown">
	<button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>

	<? 
	if ($a->isGlobalArea()) { ?><?=t('Sitewide %s', $arHandle)?><? } else { ?><?=$arHandle?><? } ?>
	<ul class="dropdown-menu">
	<? if ($ap->canAddBlockToArea() && $a->areaAcceptsBlocks()) { ?>
		<li><a dialog-title="<?=t('Add New Block')?>" class="dialog-launch" dialog-modal="false" dialog-width="550" dialog-height="380" id="menuAddNewBlock<?=$a->getAreaID()?>" href="<?=REL_DIR_FILES_TOOLS_REQUIRED?>/edit_area_popup.php?cID=<?=$c->getCollectionID()?>&arHandle=<?=urlencode($a->getAreaHandle())?>&atask=add"><i class="icon-plus-sign"></i> <?=t("Add New Block")?></a></li>
		<li><a dialog-title="<?=t('Paste from Clipboard')?>" class="dialog-launch" dialog-modal="false" dialog-width="550" dialog-height="380" id="menuAddPaste<?=$a->getAreaID()?>" href="<?=REL_DIR_FILES_TOOLS_REQUIRED?>/edit_area_popup.php?cID=<?=$c->getCollectionID()?>&arHandle=<?=urlencode($a->getAreaHandle())?>&atask=paste"><i class="icon-briefcase"></i> <?=t("Paste from Clipboard")?></a></li>
	<? } ?>
	<? if ($ap->canAddStacks() && $a->areaAcceptsBlocks()) { ?>
		<li><a dialog-title="<?=t('Add from Stack')?>" class="dialog-launch" dialog-modal="false" dialog-width="550" dialog-height="380" id="menuAddNewStack<?=$a->getAreaID()?>" href="<?=REL_DIR_FILES_TOOLS_REQUIRED?>/edit_area_popup.php?cID=<?=$c->getCollectionID()?>&arHandle=<?=urlencode($a->getAreaHandle())?>&atask=add_from_stack"><i class="icon-list"></i> <?=t("Add Stack")?></a></li>
	<? } ?>
	<? if ($a->areaAcceptsBlocks() && ($ap->canAddBlockToArea() || $ap->canAddStacks())) { ?>
		<li class="divider"></li>
	<? } ?>
	<? if ($ap->canEditAreaDesign() && ENABLE_CUSTOM_DESIGN == true && (!$c->isMasterCollection())) { ?>
		<? $showDesign = true; ?>
		<li><a dialog-title="<?=t('Custom Style')?>" class="dialog-launch" dialog-modal="false" dialog-width="475" dialog-height="500" id="menuAreaStyle<?=$a->getAreaID()?>" href="<?=REL_DIR_FILES_TOOLS_REQUIRED?>/edit_area_popup.php?cID=<?=$c->getCollectionID()?>&arHandle=<?=urlencode($a->getAreaHandle())?>&atask=design"><i class="icon-font"></i> <?=t("Edit Area Design")?></a></li>		
	<? } ?>
	<? if (isset($showDesign) && $showDesign && $ap->canEditAreaPermissions() && PERMISSIONS_MODEL != 'simple' && (!$a->isGlobalArea())) { ?>
		<li class="divider"></li>
		<li><a dialog-title="<?=t('Area Permissions')?>" class="dialog-launch" dialog-modal="false" dialog-width="425" dialog-height="430" id="menuAreaStyle<?=$a->getAreaID()?>" href="<?=REL_DIR_FILES_TOOLS_REQUIRED?>/edit_area_popup.php?cID=<?=$c->getCollectionID()?>&arHandle=<?=urlencode($a->getAreaHandle())?>&atask=groups"><i class="icon-lock"></i> <?=t("Permissions")?></a></li>		
	<? } ?>

	<!-- dropdown menu links -->
	</ul>
</div>
</div>
<? } ?>