<?phpreturn array(	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',	'name'=>'EscLineup',	'theme' => 'classic',	'preload'=>array('log'),	'import'=>array(		'application.models.*',		'application.models.forms.*',		'application.components.*',		'ext.yii-easyimage-master.EasyImage'	),	'modules'=>array(		'gii'=>array(			'class'=>'system.gii.GiiModule',			'password'=>'123',			'ipFilters'=>array('127.0.0.1', '91.215.57.201'),		),	),	'components'=>array(		'user'=>array(			'class'          => 'WebUser',			'allowAutoLogin' => true,			'loginUrl'       => array('site/login'),		),		'db'=>array(			'connectionString' => 'mysql:host=localhost;dbname=esc',			'emulatePrepare' => true,			'username' => 'root',			'password' => 'root',			'charset' => 'utf8',		),		'errorHandler'=>array(			'errorAction'=>'site/error',		),//		'log'=>array(//			'class'=>'CLogRouter',//			'routes'=>array(//				array(//					'class'=>'CFileLogRoute',//					'levels'=>'error, warning',//				),//			),//		),		'urlManager' => array(			'urlFormat' => 'path',			'showScriptName' => false,		),		'easyImage' => array(			'class' => 'application.extensions.yii-easyimage-master.EasyImage',			//'driver' => 'GD',			//'quality' => 100,			//'cachePath' => '/assets/easyimage/',			//'cacheTime' => 2592000,			//'retinaSupport' => false,		),		'photo' => array(			'class' => 'PhotoComponent',			'imageFolder' => '/mnt/shared/lineupImages/',			'iconsFolder' => '/mnt/shared/lineupIcons/',		),	),	'params'=>array(		'adminEmail'=>'dougan88@mail.ru',		'countries'=>array(			'US'=>'USA',			'NL'=>'Netherlands',			'UK'=>'United Kingdom',			'AE'=>'United Arab Emirates',		),		'cities'=>array(			'LO'=>'London',			'AM'=>'Amsterdam',			'PR'=>'Praga',		),		'userTypes'=>array(			'customer' =>'Customer',			'user'     =>'User',		),		'imageFolder' => '/mnt/shared/lineupImages/',		'iconsFolder' => '/mnt/shared/lineupIcons/',		'randMin' => 1,		'randMax' => 100,		'maxFilesUpload' => 3,		'maxUploadFileSize' => 3145728,		'iconHeight' => 150,		'iconWidth'  => 110,		'photoG'     => 'photoG',		'photoA'     => 'photoA',	),);