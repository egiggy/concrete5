<?
defined('C5_EXECUTE') or die("Access Denied.");
/**
 * An object corresponding to a particular view of an attribute.
 *
 * @author Andrew Embler <andrew@concrete5.org>
 * @category Concrete
 * @copyright  Copyright (c) 2003-2008 Concrete5. (http://www.concrete5.org)
 * @license    http://www.concrete5.org/license/     MIT License
 *
 */
class Concrete5_Library_AttributeTypeView extends View {
	
	protected $attributeValue;
	protected $attributeKey;
	protected $attributeType;
	protected $attributePkgHandle;
	protected $viewToRender;

	protected function getValue() {return $this->attributeValue;}
	protected function getAttributeKey() {return $this->attributeKey;}

	public function __construct($mixed) {
		if ($mixed instanceof AttributeValue) {
			$this->attributeValue = $mixed;
			$this->attributeKey = $mixed->getAttributeKeyObject();
			$this->attributeType = $this->attributeKey->getAttributeTypeObject();
		} else if ($mixed instanceof AttributeKey) {
			$this->attributeKey = $mixed;
			$this->attributeType = $this->attributeKey->getAttributeType();
		} else {
			$this->attributeType = $mixed;
		}
		$this->attributePkgHandle = $this->attributeType->getPackageHandle();
	}		

	public function start($view) {
		$this->viewToRender = $view;
	}

	public function startRender() {
		$js = $this->attributeType->getAttributeTypeFileURL($this->viewToRender . '.js');
		$css = $this->attributeType->getAttributeTypeFileURL($this->viewToRender . '.css');
		$html = Loader::helper('html');
		if ($js != false) { 
			$this->addOutputAsset($html->javascript($js));
		}
		if ($css != false) { 
			$this->addOutputAsset($html->css($css));
		}
	}		
	
	public function setupRender() {
		$atHandle = $this->attributeType->getAttributeTypeHandle();
		$env = Environment::get();
		$r = $env->getRecord(DIRNAME_MODELS . '/' . DIRNAME_ATTRIBUTES . '/' . DIRNAME_ATTRIBUTE_TYPES . '/' . $atHandle . '/' . $this->viewToRender . '.php', $this->attributePkgHandle);
		if ($this->viewToRender == 'composer' && !$r->exists()) {
			$this->render('form');
		} else {
			$file = $r->file;
			$this->setViewTemplate($file);
		}
	}

	public function setupController() {
		if (!$this->controller) {
			$this->controller = $this->attributeType->getController();
			$this->controller->setupAndRun($this->viewToRender);
			if (is_object($attributeKey)) {
				$this->controller->set('akID', $this->attributeKey->getAttributeKeyID());
			}
		}
	}

	public function action($action) {
		$uh = Loader::helper('concrete/urls');
		$a = func_get_args();
		$args = '';
		for ($i = 1; $i < count($a); $i++) {
			$args .= '&args[]=' . $a[$i];
		}
		$url = $uh->getToolsURL('attribute_type_actions') . '?atID=' . $this->controller->attributeType->getAttributeTypeID();
		if (is_object($this->attributeKey)) {
			$url .= '&akID=' . $this->attributeKey->getAttributeKeyID();
		}
		$url .= '&action=' . $action . $args;
		return $url;
	}
	
	public function finishRender() {}

	protected function onBeforeGetContents() {
		@Loader::element(DIRNAME_ATTRIBUTES . '/' . $view . '_header', array('type' => $this->attributeType));
	}

	protected function onAfterGetContents() {
		@Loader::element(DIRNAME_ATTRIBUTES . '/' . $view . '_footer', array('type' => $this->attributeType));
	}


}