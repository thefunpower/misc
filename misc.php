<?php 
global $misc_config,$config;
$misc_ini = PATH.'boot/misc.ini.php';
if(file_exists($misc_ini)){
	include $misc_ini;
}else{
	include __DIR__.'/config/misc.local.ini.php'; 	
}
/**
 * 加载资源文件
 * $base_path = '/node/';
 * misc('echarts'); 
 * misc('jquery,vue,element');   
 */ 
function misc($name)
{
	if (strpos($name, ',') !== false) {
		$arr = explode(',', $name);
		foreach ($arr as $v) {
			misc_load($v);
		}
	} else {
		misc_load($name);
	}
} 
 
function misc_load($name)
{
	$name = trim($name);
	static $_load;
	global $misc_config;
	$all = $misc_config[$name];
	if (isset($_load[$name])) {
		return;
	}
	if ($all && is_array($all)) {
		foreach ($all as $v) {
			$ext = get_ext($v);
			if (strpos($v, '//') === false) {
				$url = static_url() . $v;
			} else {
				$url = $v;
			}
			if ($ext == 'js') {
				js($url);
			} else if ($ext == 'css') {
				css($url);
			}
		}
		$_load[$name] = true;
	}
} 
