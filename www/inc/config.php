<?php
/*
Tier1 Server Control Pannel
Version: 0.2
Date: 2011-02-27
Author: Banshee
Edit: BoSSMan_DK - 2011-04-27
Edit: BoSSMan_DK - 2011-07-25 - Add Updater suff, updated modlist
URL: http://going4.com

Tier1 Server Control Pannel is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License. Permissions beyond the scope of this license may be available at http://going4.com.

http://creativecommons.org/licenses/by-nc-sa/3.0/
*/


// URL of Header graphic. Static or relative.
$header_img = 'http://tier1ops.eu/forum/styles/we_universal/theme/images/header_1.jpg';

// Servername. Will get displayed on the interface.
// It won't be used in for the serverconfig.
$server_name = 'Tier1 Operations';

// Sudo User. User wich the server will own the server process
$sudo_user = 'marsoc';

// Webdir path
// Path where this tool resides in
$server_path ='/var/www/LASCP/';

// ArmA directory path
// Path where ArmA files reside in
$arma_dir ='/data/a2oa/';

// Modlist
$modlist ='@cba;@ace;@acex;@acex_sm;@fdf_podagorsk;@thirsk;@isla_duala;@glt_missilebox;@torabora;@fallujah;@ngs_capraia;';
// $modlist ='@cba;@ace;@acex;@acex_sm;@ngs_capraia;';

// Updater stuff:
// In testing fase - so keeing it simple and seperate
// That does mean that we now have to different Arma Dirs
# This is the game folder (read from the config instead)
#$armadir = "/data/a2oa_game";
$armadir = "/data/a2oa";
# This is the mid path datastore for sync (read from the config instead)
#$syncdir = "/data/a2oa_test";
$syncdir = "/data/a2oa_data";

# List of mirrors (Should be in the configs)
$mirrorlist = array("six.bssnet.dk");
#$mirrorlist = array("six.bssnet.dk", "dev-heaven.net");

# List of mods to install (read from the config instead)
$tier1mods = array( "smk", "rh_smg", "rh_mgs", "acex_usnavy", "acex_pla", "acex_ru", "sthud", "stmovement", "acre", "jayarma2lib", "cba", "ace", "acex", "fdf_podagorsk", "isla_duala", "glt_missilebox", "torabora", "fallujah", "ngs_capraia", "brg_africa", "jsrs-e", "jsrs-v", "jsrs-vw", "jsrs-w" );
$mods = array( "smk", "rh_smg", "rh_mgs", "acex_usnavy", "acex_pla", "acex_ru", "sthud", "stmovement", "acre", "jayarma2lib", "cba", "ace", "acex", "fdf_podagorsk", "isla_duala", "glt_missilebox", "torabora", "fallujah", "ngs_capraia", "brg_africa", "jsrs-e", "jsrs-v", "jsrs-vw", "jsrs-w" );


$rsynccmd="/usr/bin/rsync --times -O --no-whole-file -r --delete --progress -h --exclude=.rsync rsync://";

# The trailing space is importaint in the following commands!
$cpcmd = "/bin/cp -r ";
$rmcmd = "/bin/rm -r ";
$decompcmd = "/bin/gunzip -r ";
$sucmd = '/usr/bin/sudo -u '.$sudo_user.' ';


?>