<?php



add_action('admin_menu', 'basicPluginMenu');

function basicPluginMenu() {
	$appName = 'Code Plugin';
	$appID = 'basic-plugin';
	add_menu_page($appName,$appName,'addministrator',$appID. '-top-level'.'pluginAdminScreen');



}

function pluginAminScreen(){
	echo"<h1>HAHA</h1>"
	echo"<p>wowo</p>"
}
?>