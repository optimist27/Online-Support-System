<?php
/**
 * =======================================
 * ###################################
 * SWIFT Framework
 *
 * @package	SWIFT
 * @author	Kayako Infotech Ltd.
 * @copyright	Copyright (c) 2001-2009, Kayako Infotech Ltd.
 * @license	http://www.kayako.com/license
 * @link		http://www.kayako.com
 * @filesource
 * ###################################
 * =======================================
 */

/**
 * The Core SWIFT Template Engine
 *
 * @author Varun Shoor
 */
class SWIFT_TemplateEngine extends SWIFT_Library
{
	static private $_activeMode = false;
	static private $_compileCheckOn = false;

	private $_dwooObject = false;
	private $_Dwoo_Security_PolicyObject = false;
	private $_Dwoo_CompilerObject = false;
	private $_themeDirectory = false;

	private $_templateGroupPrefix = '';
	private $_templateGroupName = '';

	private $_dataCache = array();
	private $_templateCache = array();

	private $_templateGroupID = 1;

	// Core Constants
	const TYPE_DB = 1;
	const TYPE_FILE = 2;

	const HEADERIMAGE_SUPPORTCENTER = 'supportcenter';
	const HEADERIMAGE_CONTROLPANEL = 'controlpanel';

	/**
	 * Constructor
	 *
	 * @author Varun Shoor
	 * @param int $_engineType The Engine Type
	 * @return bool "true" on Success, "false" otherwise
	 * @throws SWIFT_Exception When the themes directory is Unavailable
	 */
	public function __construct($_engineType)
	{
		$_SWIFT = SWIFT::GetInstance();

		if (!self::IsValidEngineType($_engineType))
		{
			return false;
		}

		parent::__construct();

		$this->SetEngineType($_engineType);
		$_cacheDirectory = './'. SWIFT_BASEDIRECTORY .'/'. SWIFT_CACHEDIRECTORY;

		spl_autoload_register(array('SWIFT_TemplateEngine', 'AutoLoad'));

		$this->Load->Library('TemplateEngine:TemplateEngineLoader', false, false);
		require_once ('./'. SWIFT_BASEDIRECTORY .'/'. SWIFT_THIRDPARTYDIRECTORY .'/dwoo/Dwoo.php');

		$this->_Dwoo_Security_PolicyObject= new Dwoo_Security_Policy();

		/*
		 * BUG FIX - Varun Shoor
		 *
		 * SWIFT-729 Support for PHP Tags in templates
		 *
		 * Comments:
		 */
		if (defined('SWIFT_ENPHP_TEMPLATES') && constant('SWIFT_ENPHP_TEMPLATES') === true) {
			$this->_Dwoo_Security_PolicyObject->setPhpHandling(Dwoo_Security_Policy::PHP_ALLOW);
		} else {
			$this->_Dwoo_Security_PolicyObject->setPhpHandling(Dwoo_Security_Policy::PHP_REMOVE);
		}

		$this->_Dwoo_Security_PolicyObject->setConstantHandling(Dwoo_Security_Policy::CONST_DISALLOW);

		if ($this->GetEngineType() == self::TYPE_FILE)
		{
			$this->Load->Library('TemplateEngine:TemplateEngineFile', false, false);

			if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_SETUP)
			{
				$_themeDirectory = './'. SWIFT_BASEDIRECTORY .'/'. SWIFT_THEMESDIRECTORY . '/setup/';
			} else {
				$_themeDirectory = './'. SWIFT_BASEDIRECTORY .'/'. SWIFT_THEMESDIRECTORY . '/admin_' . Clean(THEME_ADMIN) . '/';
				$this->LoadDefaultTemplateGroup();
			}

			$this->_themeDirectory = $_themeDirectory;

			if (!defined('THEME_ADMIN') || !file_exists($_themeDirectory) || !is_dir($_themeDirectory))
			{
				throw new SWIFT_Exception('No themes directory specified or the theme directory does not exist');

				return false;
			}

			$this->_Dwoo_Security_PolicyObject->allowDirectory($_themeDirectory);

		} else {
			$this->Load->Library('TemplateEngine:TemplateEngineString', false, false);

			$_themeDirectory = './'. SWIFT_BASEDIRECTORY .'/'. SWIFT_THEMESDIRECTORY . '/client_' . Clean(THEME_CLIENT) . '/';

			$this->_themeDirectory = $_themeDirectory;

			if (!defined('THEME_ADMIN') || !file_exists($_themeDirectory) || !is_dir($_themeDirectory))
			{
				throw new SWIFT_Exception('No themes directory specified or the theme directory does not exist');

				return false;
			}

			$this->LoadTemplateGroup(SWIFT_Router::GetTemplateGroup());
		}

		$this->_Dwoo_CompilerObject = new Dwoo_Compiler();
		$this->_Dwoo_CompilerObject->setDelimiters('<{', '}>');
		$this->_Dwoo_CompilerObject->setSecurityPolicy($this->_Dwoo_Security_PolicyObject);

		$this->_dwooObject = new Dwoo($_cacheDirectory, $_cacheDirectory);
		$this->_dwooObject->setLoader(new SWIFT_TemplateEngineLoader($_cacheDirectory));

		$this->_dwooObject->setSecurityPolicy($this->_Dwoo_Security_PolicyObject);

		$this->_dwooObject->addPlugin('RenderTemplate', array('SWIFT_TemplateEngine', 'RenderTemplate'));
		if ($this->GetEngineType() == self::TYPE_FILE)
		{
			$this->_dwooObject->addPlugin('RenderControlPanelMenu', array('SWIFT_UserInterfaceControlPanel', 'RenderControlPanelMenu'));
			$this->_dwooObject->addPlugin('RenderAdminNavigationBar', array('SWIFT_UserInterfaceControlPanel', 'RenderAdminNavigationBar'));
			$this->_dwooObject->addPlugin('RenderOnlineStaff', array('SWIFT_UserInterfaceControlPanel', 'RenderOnlineStaff'));
			$this->_dwooObject->removeResource('file');
			$this->_dwooObject->addResource('file', 'SWIFT_TemplateEngineFile', array('SWIFT_TemplateEngine', 'GetCompilerObject'));
		} else {
			$this->_dwooObject->removeResource('string');
			$this->_dwooObject->addResource('string', 'SWIFT_TemplateEngineString', array('SWIFT_TemplateEngine', 'GetCompilerObject'));
		}

		$this->_dwooObject->setDefaultCompilerFactory('file', array('SWIFT_TemplateEngine', 'GetCompilerObject'));
		$this->_dwooObject->setDefaultCompilerFactory('string', array('SWIFT_TemplateEngine', 'GetCompilerObject'));

		return true;
	}

	/**
	 * Destructor
	 *
	 * @author Varun Shoor
	 * @return bool "true" on Success, "false" otherwise
	 */
	public function __destruct()
	{
		parent::__destruct();

		return true;
	}

	/**
	 * Check to see if it is a valid Header Image Type
	 *
	 * @author Varun Shoor
	 * @param constant $_headerImageType The Header Image Type
	 * @return bool "true" on Success, "false" otherwise
	 */
	static public function IsValidHeaderImageType($_headerImageType)
	{
		if ($_headerImageType == self::HEADERIMAGE_SUPPORTCENTER || $_headerImageType == self::HEADERIMAGE_CONTROLPANEL)
		{
			return true;
		}

		return false;
	}

	/**
	 * Retrieve the full URL to the relevant Header Image
	 *
	 * @author Varun Shoor
	 * @param constant $_headerImageType The Header Image Type
	 * @return mixed "Header Image" (STRING) on Success, "false" otherwise
	 * @throws SWIFT_Exception If the Class is not Loaded
	 */
	public function RetrieveHeaderImage($_headerImageType)
	{
		if (!$this->GetIsClassLoaded())
		{
			throw new SWIFT_Exception(SWIFT_CLASSNOTLOADED);

			return false;
		} else if (!self::IsValidHeaderImageType($_headerImageType)) {
			throw new SWIFT_Exception(SWIFT_INVALIDDATA);

			return false;
		}

		$_settingsHeaderImage = $this->Settings->GetKey('headerimage', $_headerImageType);

		if ($_settingsHeaderImage && file_exists('./' . SWIFT_BASEDIRECTORY . '/' . SWIFT_FILESDIRECTORY . '/' . $_settingsHeaderImage))
		{
			return SWIFT::Get('swiftpath') . SWIFT_BASEDIRECTORY . '/' . SWIFT_FILESDIRECTORY . '/' . $_settingsHeaderImage;
		} else {
			return SWIFT::Get('themepath') . 'images/' . strtolower(SWIFT_PRODUCT) . '.gif';
		}

		return false;
	}

	/**
	 *  Load the default template group id
	 *
	 * @author Varun Shoor
	 * @return bool "true" on Success, "false" otherwise
	 * @throws SWIFT_Exception If the Class is not Loaded
	 */
	public function LoadDefaultTemplateGroup() {
		$_SWIFT = SWIFT::GetInstance();

		if (!$this->GetIsClassLoaded()) {
			throw new SWIFT_Exception(SWIFT_CLASSNOTLOADED);

			return false;
		}

		$_defaultTemplateGroupID = false;
		$_templateGroupCache = $_SWIFT->Cache->Get('templategroupcache');

		foreach ($_templateGroupCache as $_templateGroupID => $_templateGroupContainer) {
			if ($_templateGroupContainer['isdefault'] == '1') {
				$_defaultTemplateGroupID = $_templateGroupID;
			}
		}

		if (!$_defaultTemplateGroupID && SWIFT_INTERFACE != 'console') {
			throw new SWIFT_Exception(SWIFT_INVALIDDATA);
		}

		$this->_templateGroupID = $_defaultTemplateGroupID;

		if ($_defaultTemplateGroupID != false) {
			$this->SetTemplateGroupID($_defaultTemplateGroupID);
		}

		return true;
	}

	/**
	 * Load the Template Engine File if it doesnt exist
	 *
	 * @author Varun Shoor
	 * @param int $_templateType The Template Type
	 * @return bool "true" on Success, "false" otherwise
	 */
	public function LoadTemplateEngineFile($_templateType)
	{
		if ($_templateType == self::TYPE_FILE && !class_exists('SWIFT_TemplateEngineFile'))
		{
			$this->Load->Library('TemplateEngine:TemplateEngineFile', false, false);
		} else if ($_templateType == self::TYPE_DB && !class_exists('SWIFT_TemplateEngineString')) {
			$this->Load->Library('TemplateEngine:TemplateEngineString', false, false);
		}

		return true;
	}

	/**
	 * Return the Dwoo Compiler Object
	 *
	 * @author Varun Shoor
	 * @return object The Dwoo_Compiler Object
	 */
	static public function GetCompilerObject()
	{
		$_SWIFT = SWIFT::GetInstance();

		return $_SWIFT->Template->GetCompiler();
	}

	/**
	 * Return the Dwoo Compiler Object
	 *
	 * @author Varun Shoor
	 * @return object The Dwoo_Compiler Object
	 */
	public function GetCompiler()
	{
		return $this->_Dwoo_CompilerObject;
	}

	/**
	 * Loads the variables from the global name space
	 *
	 * @author Varun Shoor
	 * @return bool "true" on Success, "false" otherwise
	 */
	public function LoadVariables()
	{
		$_SWIFT = SWIFT::GetInstance();

		$this->Assign('_swiftBaseName', SWIFT_BASENAME);

		$_languageCache = $this->Cache->Get('languagecache');
		$this->Assign('_languageContainer', $_languageCache);

		if (defined('BUILD_TYPE'))
		{
			SWIFT::Set('buildtype', BUILD_TYPE);
			$this->Assign('_buildType', BUILD_TYPE);
		} else {
			SWIFT::Set('buildtype', $_SWIFT->Language->Get('na'));
			$this->Assign('_buildType', $_SWIFT->Language->Get('na'));
		}

		if (defined('BUILD_DATE'))
		{
			SWIFT::Set('builddate', BUILD_DATE);
			$this->Assign('_buildDate', BUILD_DATE);
		} else {
			SWIFT::Set('builddate', $_SWIFT->Language->Get('na'));
			$this->Assign('_buildDate', $_SWIFT->Language->Get('na'));
		}

		if (defined('SOURCE_TYPE'))
		{
			SWIFT::Set('sourcetype', SOURCE_TYPE);
			$this->Assign('_sourceType', SOURCE_TYPE);
		} else {
			SWIFT::Set('sourcetype', $_SWIFT->Language->Get('na'));
			$this->Assign('_sourceType', $_SWIFT->Language->Get('na'));
		}

		$this->Assign('_headerImageCP', $this->RetrieveHeaderImage(self::HEADERIMAGE_CONTROLPANEL));
		$this->Assign('_headerImageSC', $this->RetrieveHeaderImage(self::HEADERIMAGE_SUPPORTCENTER));

		$this->Assign('_version', strtoupper(SWIFT_VERSION));
		$this->Assign('_product', strtolower(SWIFT_PRODUCT));
		$this->Assign('_productTitle', SWIFT_PRODUCT);

		$_templateGroupCache = $this->Cache->Get('templategroupcache');
		if (isset($_templateGroupCache[$this->GetTemplateGroupID()]['companyname'])) {
			SWIFT::Set('companyname', $_templateGroupCache[$this->GetTemplateGroupID()]['companyname']);
			$this->Assign('_companyName', htmlspecialchars($_templateGroupCache[$this->GetTemplateGroupID()]['companyname']));
		}  else {
			SWIFT::Set('companyname', $this->Settings->Get('general_companyname'));
			$this->Assign('_companyName', htmlspecialchars($this->Settings->Get('general_companyname')));
		}

		$this->Assign('_settings', $_SWIFT->Settings->GetSettings());
		$this->Assign('_area', $_SWIFT->Interface->GetName());
		$this->Assign('_defaultTitle', sprintf($_SWIFT->Language->Get('defaulttitle'), $this->Settings->Get('general_companyname'), SWIFT_PRODUCT, SWIFT_VERSION));
		$this->Assign('_defaultFooter', sprintf($_SWIFT->Language->Get('defaulttitle'), SWIFT_PRODUCT, SWIFT_VERSION));

		$this->Assign('_poweredByNotice', sprintf($_SWIFT->Language->Get('poweredby'), SWIFT_PRODUCT));
		$this->Assign('_currentYear', strftime('%Y'));
		$this->Assign('_copyright', sprintf($_SWIFT->Language->Get('copyright'), strftime('%Y')));

		$_basePath = StripTrailingSlash(SWIFT::Get('swiftpath'));

		if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_SETUP)
		{
			$_baseName = SWIFT_BASENAME;
		} else {
			$_originalBaseName = SWIFT_BASENAME;
			if (!empty($_originalBaseName))
			{
				$_originalBaseName = '/' . $_originalBaseName;
			}
			$_basePath = StripTrailingSlash(SWIFT::Get('swiftpath')) . $_originalBaseName;

			// The client area is the root directory of package, so we dont append the interface name.
			if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_CLIENT)
			{
				$_baseName = StripTrailingSlash(SWIFT::Get('swiftpath')) . $_originalBaseName;
			} else {
				$_baseName = SWIFT::Get('swiftpath') . $_SWIFT->Interface->GetName() . $_originalBaseName;
			}
		}

		SWIFT::Set('basename', RemoveTrailingSlash($_baseName));
		SWIFT::Set('basepath', RemoveTrailingSlash($_basePath));

		$this->Assign('_extendedRefreshScript', '');
		$this->Assign('_baseName', RemoveTrailingSlash($_baseName));
		$this->Assign('_basePath', RemoveTrailingSlash($_basePath));
		$this->Assign('_currentDate', SWIFT_Date::Get(SWIFT_Date::TYPE_DATETIME));
		$this->Assign('_session', array());

		$this->Assign('_skinName', '');

		if (SWIFT::Get('swiftpath'))
		{
			$this->Assign('_swiftPath', SWIFT::Get('swiftpath'));
		}

		if (SWIFT::Get('themepath'))
		{
			$this->Assign('_themePath', SWIFT::Get('themepath'));
		}

		$_jQueryTheme = 'custom';
		if ($this->Settings->Get('g_cpdefaultskin') != 'default')
		{
			$this->Assign('_defaultSkin', $_SWIFT->Settings->Get('g_cpdefaultskin'));
			$this->Assign('_defaultSkinSuffix', '_' . $_SWIFT->Settings->Get('g_cpdefaultskin'));
			$this->Assign('_jQueryTheme', $_SWIFT->Settings->Get('g_cpdefaultskin'));
			$_jQueryTheme = $_SWIFT->Settings->Get('g_cpdefaultskin');
		} else {
			$this->Assign('_jQueryTheme', 'custom');
			$this->Assign('_defaultSkinSuffix', '');
		}

		SWIFT::Set('jquerytheme', $_jQueryTheme);

		return true;
	}

	/**
	 * Assign a value to the template engine
	 *
	 * @author Varun Shoor
	 * @param string $_key The Key Name
	 * @param string $_value The Value Name
	 * @return bool "true" on Success, "false" otherwise
	 */
	public function Assign($_key, $_value)
	{
		if (!$this->GetIsClassLoaded() || empty($_key))
		{
			return false;
		}

		$this->_dataCache[$_key] = $_value;

		return true;
	}

	/**
	 * Renders a template
	 *
	 * @author Varun Shoor
	 * @param string $_templateName The Template Name
	 * @param int $_templateType The Template Type
	 * @return bool "true" on Success, "false" otherwise
	 */
	public function Render($_templateName, $_templateType = false)
	{
		if (!$this->GetIsClassLoaded() || empty($_templateName))
		{
			return false;
		}

		$this->LoadTemplateEngineFile($_templateType);

		echo $this->Get($_templateName, $_templateType);

		return false;
	}

	/**
	 * Renders the Given Template
	 *
	 * @author Varun Shoor
	 * @param string $name The Template Name
	 * @return bool "true" on Success, "false" otherwise
	 */
	static public function RenderTemplate($name = '')
	{
		$_SWIFT = SWIFT::GetInstance();

		if (empty($name))
		{
			return false;
		}

		return $_SWIFT->Template->Get($name, self::$_activeMode);
	}

	/**
	 * Renders a template and return the output
	 *
	 * @author Varun Shoor
	 * @param string $_templateName The Template Name
	 * @param int $_templateType The Template Type
	 * @return mixed Template Parsed Data (STRING) on Success, "false" otherwise
	 */
	public function Get($_templateName, $_templateType = false)
	{
		$_SWIFT = SWIFT::GetInstance();

		if (!$this->GetIsClassLoaded() || empty($_templateName))
		{
			return false;
		}

		if (!$_templateType)
		{
			$_templateType = $this->GetEngineType();
		}

		self::$_activeMode = $_templateType;

		$this->LoadTemplateEngineFile($_templateType);

		$_templateName = Clean($_templateName);

		$this->_dataCache['_language'] = &$_SWIFT->Language->_phraseCache;
		$this->_dataCache['_settings'] = &$_SWIFT->Settings->_settingsCache['settings'];

		$_templateResult = false;

		if ($_templateType == self::TYPE_FILE && $this->_themeDirectory)
		{
			$_SWIFT_TemplateEngineFileObject = new SWIFT_TemplateEngineFile($this->_themeDirectory . $_templateName . '.tpl');

			$_templateResult = $this->_dwooObject->get($_SWIFT_TemplateEngineFileObject, $this->_dataCache, $this->_Dwoo_CompilerObject);
		} else if ($_templateType == self::TYPE_DB && $this->_themeDirectory) {
			$this->LoadTemplateEngineFile(self::TYPE_DB);

			if (!isset($this->_templateCache[$this->_templateGroupID][$_templateName]))
			{
				$this->LoadCache(array($_templateName));
			}

			/*
			 * BUG FIX - Varun Shoor
			 *
			 * SWIFT-729 Support for PHP Tags in templates
			 *
			 * Comments: None
			 */
			$_SWIFT_TemplateEngineStringObject = new SWIFT_TemplateEngineString($_templateName . $this->_templateGroupID, preg_replace('/<(\s*)script(\s*)language(\s*)=(\s*)("|\'?)php("|\'?)(\s*)>/i', '', str_replace(array('<?php', '<?', '?>', '<%', '%>'), '', $this->_templateCache[$this->_templateGroupID][$_templateName]['contents'])));
			if (defined('SWIFT_ENPHP_TEMPLATES') && constant('SWIFT_ENPHP_TEMPLATES') === true) {
				$_SWIFT_TemplateEngineStringObject = new SWIFT_TemplateEngineString($_templateName . $this->_templateGroupID, $this->_templateCache[$this->_templateGroupID][$_templateName]['contents']);
			}

			$_templateResult = $this->_dwooObject->get($_SWIFT_TemplateEngineStringObject, $this->_dataCache, $this->_Dwoo_CompilerObject);
		}

		if (defined('SWIFT_DEBUG') && constant('SWIFT_DEBUG') == true && SWIFT_INTERFACE != 'winapp' && SWIFT_INTERFACE != 'console' && ob_get_level() == 0)
		{
			ob_start();
		}

		return $_templateResult;
	}

	/**
	 * Run a Compilation Check on Templates
	 *
	 * @author Varun Shoor
	 * @param string $_templateName The Template Name
	 * @return bool "true" on Success, "false" otherwise
	 * @throws SWIFT_Exception If the Class is not Loaded
	 */
	public function CompileCheck($_templateName)
	{
		if (!$this->GetIsClassLoaded())
		{
			throw new SWIFT_Exception(SWIFT_CLASSNOTLOADED);

			return false;
		}

		$this->LoadTemplateEngineFile(self::TYPE_DB);

		if (!isset($this->_templateCache[$this->_templateGroupID][$_templateName]))
		{
			$this->LoadCache(array($_templateName));
		}

		$_SWIFT_TemplateEngineStringObject = new SWIFT_TemplateEngineString($_templateName . $this->_templateGroupID, $this->_templateCache[$this->_templateGroupID][$_templateName]['contents']);

		$this->_dwooObject->setTemplate($_SWIFT_TemplateEngineStringObject);
		$_SWIFT_TemplateEngineStringObject->forceCompilation();
		$_SWIFT_TemplateEngineStringObject->getCompiledTemplate($this->_dwooObject, $this->_Dwoo_CompilerObject);

		return true;
	}

	/**
	 * Load the Template List into Cache
	 *
	 * @author Varun Shoor
	 * @param mixed $_templateList The Template List
	 * @return bool "true" on Success, "false" otherwise
	 */
	public function LoadCache($_templateList = array())
	{
		if (!is_array($_templateList))
		{
			$_templateList = array($_templateList);
		}

		$this->Database->Query("SELECT * FROM ". TABLE_PREFIX ."templates AS templates
			LEFT JOIN ". TABLE_PREFIX . "templatedata AS templatedata ON (templates.templateid = templatedata.templateid)
			WHERE templates.tgroupid = '". intval($this->_templateGroupID) ."' AND templates.name IN (". BuildIN($_templateList) .")", 5);
		while ($this->Database->NextRecord(5))
		{
			$this->_templateCache[$this->_templateGroupID][$this->Database->Record5['name']] = $this->Database->Record5;
		}

		foreach ($_templateList as $_key => $_val)
		{
			if (!isset($this->_templateCache[$this->_templateGroupID][$_val]))
			{
				$this->_templateCache[$this->_templateGroupID][$_val] = '';
			}
		}

		return true;
	}

	/**
	 * Checks to see if its a valid engine type
	 *
	 * @author Varun Shoor
	 * @param int $_engineType The Engine Type
	 * @return bool "true" on Success, "false" otherwise
	 */
	static public function IsValidEngineType($_engineType)
	{
		if ($_engineType == self::TYPE_DB || $_engineType == self::TYPE_FILE)
		{
			return true;
		}

		return false;
	}

	/**
	 * Sets the Template Engine Type
	 *
	 * @author Varun Shoor
	 * @param int $_engineType The Engine Type
	 * @return bool "true" on Success, "false" otherwise
	 */
	private function SetEngineType($_engineType)
	{
		if (!self::IsValidEngineType($_engineType))
		{
			return false;
		}

		$this->_engineType = $_engineType;

		return true;
	}

	/**
	 * Retrieve the Template Engine Type
	 *
	 * @author Varun Shoor
	 * @return mixed "_engineType" (INT) on Success, "false" otherwise
	 */
	public function GetEngineType()
	{
		return $this->_engineType;
	}

	/**
	 * Auto Load the Dwoo files
	 *
	 * @author Varun Shoor
	 * @param string $_className The Class Name to Load
	 * @return bool "true" on Success, "false" otherwise
	 */
	static public function AutoLoad($_className)
	{
		$_className = Clean($_className);

		if (substr($_className, 0, 5) === 'Dwoo_') {
			require_once ('./'. SWIFT_BASEDIRECTORY .'/'. SWIFT_THIRDPARTYDIRECTORY .'/dwoo/'. strtr($_className, '_', '/') . '.php');

			return true;
		}

		return false;
	}

	/**
	 * Loads the Template Engine
	 *
	 * @author Varun Shoor
	 * @return bool "true" on Success, "false" otherwise
	 */
	static public function LoadEngine()
	{
		$_SWIFT = SWIFT::GetInstance();

		// Process the Engine Type First.. the database engine is only for client & visitor interfaces..
		$_engineType = self::TYPE_FILE;

		if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_CLIENT || $_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_VISITOR ||
				$_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_RSS)
		{
			$_engineType = self::TYPE_DB;
		}

		$_SWIFT_TemplateEngineObject = new SWIFT_TemplateEngine($_engineType);
		if (!$_SWIFT_TemplateEngineObject instanceof SWIFT_TemplateEngine || !$_SWIFT_TemplateEngineObject->GetIsClassLoaded())
		{
			return false;
		}

		if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_CLIENT || $_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_VISITOR ||
				$_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_RSS)
		{
			$_SWIFT_TemplateEngineObject->Assign('_templateGroupTitle', '');
		}

		return $_SWIFT_TemplateEngineObject;
	}

	/**
	 * Set the Template Group Prefix
	 *
	 * @author Varun Shoor
	 * @param string $_templateGroupID The Template Group ID
	 * @return bool "true" on Success, "false" otherwise
	 * @throws SWIFT_Exception If the Class is not Loaded
	 */
	public function SetTemplateGroupPrefix($_templateGroupID)
	{
		if (!$this->GetIsClassLoaded())
		{
			throw new SWIFT_Exception(SWIFT_CLASSNOTLOADED);

			return false;
		}

		$_templateGroupCache = $this->Cache->Get('templategroupcache');

		$this->_templateGroupPrefix = '';

		$this->Assign('_templateGroupPrefix', '');
		if ($_templateGroupCache[$_templateGroupID]['isdefault'] != '1')
		{
			$this->_templateGroupPrefix = '/' . $_templateGroupCache[$_templateGroupID]['title'];
			$this->Assign('_templateGroupPrefix', $this->_templateGroupPrefix);
		}

		return true;
	}

	/**
	 * Retrieve the Template Group Prefix
	 *
	 * @author Varun Shoor
	 * @return string The Template Group Prefix
	 * @throws SWIFT_Exception If the Class is not Loaded
	 */
	public function GetTemplateGroupPrefix()
	{
		if (!$this->GetIsClassLoaded())
		{
			throw new SWIFT_Exception(SWIFT_CLASSNOTLOADED);

			return false;
		}

		return $this->_templateGroupPrefix;
	}

	/**
	 * Set the active template group name
	 *
	 * @author Varun Shoor
	 * @return string Retrieve the active template group name
	 * @throws SWIFT_Exception If the Class is not Loaded
	 */
	public function GetTemplateGroupName()
	{
		if (!$this->GetIsClassLoaded())
		{
			throw new SWIFT_Exception(SWIFT_CLASSNOTLOADED);

			return false;
		}

		return $this->_templateGroupName;
	}

	/**
	 * Set the Template Group Name
	 *
	 * @author Varun Shoor
	 * @param string $_templateGroupName The Template Group Name
	 * @return bool "true" on Success, "false" otherwise
	 * @throws SWIFT_Exception If the Class is not Loaded
	 */
	public function SetTemplateGroupName($_templateGroupName)
	{
		if (!$this->GetIsClassLoaded())
		{
			throw new SWIFT_Exception(SWIFT_CLASSNOTLOADED);

			return false;
		}

		$this->_templateGroupName = $_templateGroupName;

		return true;
	}

	/**
	 * Set the Template Group ID
	 *
	 * @author Varun Shoor
	 * @param int $_templateGroupID The Template Group ID to set
	 * @return bool "true" on Success, "false" otherwise
	 * @throws SWIFT_Exception If the Class is not Loaded
	 */
	public function SetTemplateGroupID($_templateGroupID)
	{
		$_SWIFT = SWIFT::GetInstance();

		if (!$this->GetIsClassLoaded())
		{
			throw new SWIFT_Exception(SWIFT_CLASSNOTLOADED);

			return false;
		}

		$this->Load->Library('Template:TemplateGroup', false, false);

		$_templateGroupCache = $this->Cache->Get('templategroupcache');
		$_userGroupCache = $this->Cache->Get('usergroupcache');
		if (!isset($_templateGroupCache[$_templateGroupID]))
		{
			throw new SWIFT_Exception(SWIFT_INVALIDDATA);

			return false;
		}

		$_SWIFT->SetClass('TemplateGroup', new SWIFT_TemplateGroup($_templateGroupID));

		$this->SetTemplateGroupPrefix($_templateGroupID);
		$this->SetTemplateGroupName($_templateGroupCache[$_templateGroupID]['title']);

		$this->_templateGroupID = $_templateGroupID;

		// Override the company name..
		SWIFT::Set('companyname', $_templateGroupCache[$_templateGroupID]['companyname']);
		$this->Assign('_companyName', htmlspecialchars($_templateGroupCache[$_templateGroupID]['companyname']));

		// We need to override the user group id to the guest user group of this template group
		$_guestUserGroupID = $_templateGroupCache[$_templateGroupID]['guestusergroupid'];

		// User group doesnt exist? revert to master guest group..
		if (!isset($_userGroupCache[$_guestUserGroupID]))
		{
			SWIFT_Loader::LoadLibrary('User:UserGroup');
			foreach ($_userGroupCache as $_key => $_val)
			{
				if ($_val['grouptype'] == SWIFT_UserGroup::TYPE_GUEST && $_val['ismaster'] == '1')
				{
					$_guestUserGroupID = $_val['usergroupid'];

					break;
				}
			}
		}

		if (!$_SWIFT->User instanceof SWIFT_User || !$_SWIFT->User->GetIsClassLoaded()) {
			SWIFT::Set('usergroupid', $_guestUserGroupID);
			$_userGroupSettingCache = $_SWIFT->Cache->Get('usergroupsettingcache');

			$_permissionContainer = array();
			if (isset($_userGroupSettingCache[$_guestUserGroupID]) && is_array($_userGroupSettingCache[$_guestUserGroupID])) {
				$_permissionContainer = $_userGroupSettingCache[$_guestUserGroupID];
			}

			SWIFT_Loader::LoadLibrary('User:User');

			SWIFT_User::$_permissionCache = $_permissionContainer;
		}

		if ($_SWIFT->Language instanceof SWIFT_LanguageEngine && $_SWIFT->Language->GetIsClassLoaded())
		{
			$_SWIFT->Language->UpdateTemplateGroup($_templateGroupID);
		}

		return true;
	}

	/**
	 * Retrieve the currently set Template Group ID
	 *
	 * @author Varun Shoor
	 * @return mixed "_templateGroupID" (INT) on Success, "false" otherwise
	 * @throws SWIFT_Exception If the Class is not Loaded
	 */
	public function GetTemplateGroupID()
	{
		if (!$this->GetIsClassLoaded())
		{
			throw new SWIFT_Exception(SWIFT_CLASSNOTLOADED);

			return false;
		}

		return $this->_templateGroupID;
	}

	/**
	 * Load the Template Group
	 *
	 * @author Varun Shoor
	 * @param string $_templateGroupString (OPTIONAL) The Template Group String
	 * @return bool "true" on Success, "false" otherwise
	 * @throws SWIFT_Exception If the Class is not Loaded
	 */
	public function LoadTemplateGroup($_templateGroupString = false)
	{
		if (!$this->GetIsClassLoaded())
		{
			throw new SWIFT_Exception(SWIFT_CLASSNOTLOADED);

			return false;
		}

		$_templateGroupCache = $this->Cache->Get('templategroupcache');

		$_finalTemplateGroupID = $_rebuildCookie = false;

		$this->Cookie->Parse('client');

		// If we dont have a custom template group to load and theres one set in cookie.. attempt to use it..
		if (empty($_templateGroupString) && $this->Cookie->GetVariable('client', 'templategroupid'))
		{
			$_templateGroupString = intval($this->Cookie->GetVariable('client', 'templategroupid'));
		} else if (defined('SWIFT_TEMPLATE_GROUP')) {
			$_constantTemplateGroupValue = constant('SWIFT_TEMPLATE_GROUP');
			if (!empty($_constantTemplateGroupValue)) {
				$_templateGroupString = $_constantTemplateGroupValue;
			}
		}

		// Are we attempting to load a custom template group here?
		if (!empty($_templateGroupString))
		{
			// Did we receive a template group id?
			if (is_numeric($_templateGroupString) && isset($_templateGroupCache[$_templateGroupString]))
			{
				$_finalTemplateGroupID = intval($_templateGroupString);
			} else {
				// Attempt to look up the name?
				foreach ($_templateGroupCache as $_key => $_val)
				{
					if (mb_strtolower($_val['title']) == mb_strtolower($_templateGroupString))
					{
						$_finalTemplateGroupID = intval($_val['tgroupid']);

						break;
					}
				}
			}
		}

		// No valid template group found? we set it to the default group..
		if (!$_finalTemplateGroupID)
		{
			foreach ($_templateGroupCache as $_key => $_val)
			{
				if ($_val['isdefault'] == '1')
				{
					$_finalTemplateGroupID = intval($_val['tgroupid']);

					break;
				}
			}
		}

		// Although this shouldnt happen.. we have added a check for it.. if no group is found with isdefault property then we use the master group
		if (!$_finalTemplateGroupID)
		{
			foreach ($_templateGroupCache as $_key => $_val)
			{
				if ($_val['ismaster'] == '1')
				{
					$_finalTemplateGroupID = intval($_val['tgroupid']);

					break;
				}
			}
		}

		// By now we have the template group..
		if (!isset($_templateGroupCache[$_finalTemplateGroupID]))
		{
			// what the..
			throw new SWIFT_Exception(SWIFT_INVALIDDATA . "22");

			return false;
		}

		// Is it different than the cookie group?
		$_templateGroup = $_templateGroupCache[$_finalTemplateGroupID];
		if ($this->Cookie->GetVariable('client', 'templategroupid') != $_templateGroup['tgroupid'])
		{
			$this->Cookie->AddVariable('client', 'templategroupid', $_templateGroup['tgroupid']);

			$_rebuildCookie = true;
		}

		if (!self::HTTPAuthenticate($_templateGroup))
		{
			return false;
		}

		if ($_rebuildCookie)
		{
			$this->Cookie->Rebuild('client', true);
		}

		$this->SetTemplateGroupID($_templateGroup['tgroupid']);

		return true;
	}

	/**
	 * End the script because of authentication failure
	 *
	 * @author Varun Shoor
	 * @return bool "true" on Success, "false" otherwise
	 */
	static protected function DieAuthFailure()
	{
		$_SWIFT = SWIFT::GetInstance();

		echo $_SWIFT->Language->Get('invaliduser');

		exit;

		return true;
	}

	/**
	 * Send the HTTP Authentication Headers
	 *
	 * @author Varun Shoor
	 * @return bool
	 */
	protected static function HTTPAuthenticate($_templateGroup)
	{
		$_SWIFT = SWIFT::GetInstance();

		// We dont have password set for this group?
		if (!isset($_templateGroup['enablepassword']) || $_templateGroup['enablepassword'] != '1')
		{
			return true;
		}

		$_companyName = $_SWIFT->Settings->Get('general_companyname');
		if (!empty($_templateGroup['companyname']))
		{
			$_companyName = $_templateGroup['companyname'];
		}

		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0', false);
		header('Pragma: no-cache');

		if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
			header('HTTP/1.1 401 Unauthorized');
			header('WWW-Authenticate: Digest realm="' . $_companyName . '",qop="auth",nonce="' . self::GetHTTPNOnce() . '",opaque="' . md5($_companyName) . '"');

			self::DieAuthFailure();
		}

		// Analyze the PHP_AUTH_DIGEST variable
		if (!$_data = self::HTTPParseDigest($_SERVER['PHP_AUTH_DIGEST'])) {
			// Wrong Credentials

			self::DieAuthFailure();
		}

		if ($_data['username'] != $_templateGroup['groupusername'])
		{
			// Auth Failure

			self::DieAuthFailure();
		}

		// Generate the Valid Response
		$_a1Hash = md5($_templateGroup['groupusername'] . ':' . $_companyName . ':' . $_templateGroup['grouppassword']);
		$_a2Hash = md5($_SERVER['REQUEST_METHOD'] . ':' . $_data['uri']);
		$_validResponse = md5($_a1Hash . ':' . $_data['nonce'] . ':' . $_data['nc'] . ':' . $_data['cnonce'] . ':' . $_data['qop'] . ':' . $_a2Hash);
		if ($_data['response'] != $_validResponse)
		{
			// Auth Failure

			self::DieAuthFailure();
		}

		return true;
	}

	/**
	 * Retrieve the HTTP Digest Authentication NOnce Value
	 *
	 * @author Varun Shoor
	 * @return string NOnce Value
	 */
	static private function GetHTTPNOnce()
	{
		$_time = ceil(time() / 300) * 300;

		return md5(date('Y-m-d H:i', $_time) . ':' . SWIFT::Get('IP') . ':' . SWIFT::Get('InstallationHash'));
	}

	/**
	 * Parses the HTTP Digest Data
	 *
	 * @author Varun Shoor
	 * @param string $_digest The Digest Text to Parse
	 * @return array The Parsed Array
	 */
	private static function HTTPParseDigest($_digest)
	{
		$_data = array();
		$res = preg_match("/username=\"([^\"]+)\"/i", $_digest, $_matches);
		$_data['username'] = str_replace('"', '', $_matches[1]);
		$res = preg_match('/nonce=\"([^\"]+)\"/i', $_digest, $_matches);
		$_data['nonce'] = str_replace('"', '', $_matches[1]);
		$res = preg_match('/nc=([^,]+)/i', $_digest, $_matches);
		$_data['nc'] = str_replace('"', '', $_matches[1]);
		$res = preg_match('/cnonce=\"([^\"]+)\"/i', $_digest, $_matches);
		$_data['cnonce'] = str_replace('"', '', $_matches[1]);
		$res = preg_match('/qop=([^,]+)/i', $_digest, $_matches);
		$_data['qop'] = str_replace('"', '', $_matches[1]);
		$res = preg_match('/uri=\"([^\"]+)\"/i', $_digest, $_matches);
		$_data['uri'] = str_replace('"', '', $_matches[1]);
		$res = preg_match('/response=\"([^\"]+)\"/i', $_digest, $_matches);
		$_data['response'] = str_replace('"', '', $_matches[1]);

		return $_data;
	}
}
?>