Introduction
============
Fluffy Bunny Feet theme for Moodle

Experimental theme to test concept of using an adaptive grid system for layout: http://adapt.960.gs/

Styling adaped from Wordpress theme Espadade: http://www.onedesigns.com/wordpress-themes/esplanade-free-wordpress-theme

I could not think of a name for the theme so the first thing that popped into my mind that was obscure is 'Fluffy Bunny Feet' from the film 'Hot Shots' - http://www.imdb.com/title/tt0102059/.

It is by no means complete or finished!

If you find an issue with the theme, please see the 'Reporting Issues' section below.

Required version of Moodle
==========================
This version works with Moodle 2.4 version 2012112900.

Installation
============
 1. Ensure you have the version of Moodle as stated above in 'Required version of Moodle'.  This is essential as the
    theme relies on underlying core code that is out of my control.
 2. Put Moodle in 'Maintenance Mode' (docs.moodle.org/en/admin/setting/maintenancemode) so that there are no 
    users using it bar you as the administrator - if you have not already done so.
 3. Copy 'fluffybunnyfeet' to '/theme/' if you have not already done so.
 4. Login as an administrator and follow standard the 'plugin' update notification.  If needed, go to
    'Site administration' -> 'Notifications' if this does not happen.
 5. Put Moodle out of Maintenance Mode.

Uninstallation
==============
1. Put Moodle in 'Maintenance Mode' so that there are no users using it bar you as the administrator.
2. Change theme to another.
3. In '/theme/' remove the folder 'fluffybunnyfeet'.
4. Put Moodle out of Maintenance Mode.

Reporting Issues
================
Before reporting an issue, it is essential that you are operating the required version of Moodle as stated at the 
top - this is because the theme relies on core functionality that is out of its control.

I operate a policy that I will fix all genuine issues for free.  Improvements are at my discretion.  I am happy to make bespoke
customisations / improvements for a negotiated fee. 

When reporting an issue you can post in the theme's forum on Moodle.org (currently 'moodle.org/mod/forum/view.php?id=46')
or contact me direct (details at the bottom).

It is essential that you provide as much information as possible, the critical information being the contents of the theme's 
version.php file.  Other version information such as specific Moodle version, theme name and version also helps.  A screen shot
can be really useful in visualising the issue along with any files you consider to be relevant.

Version Information
===================
2nd February 2013 - Version 2.4.0.1 - Alpha - Do not install on production sites.
  1.  First version.

3rd February 2013 - Version 2.4.0.2 - Alpha - Do not install on production sites.
  1.  Implemented loginout.php code from Mary Evan's tiny theme at her suggestion - not quite working yet.
  2.  Fixed calendar being too big.
  3.  Added html5shim javascript - https://code.google.com/p/html5shim/
  4.  Moved adapt.js config into 'layout/adapt_config.php'.  Php file as uses $CFG global.  File is then included in other layouts.

G J Barnard MSc. BSc(Hons)(Sndw). MBCS. CEng. CITP. PGCE. - 3rd February 2013.
Moodle profile: moodle.org/user/profile.php?id=442195.
Web profile   : about.me/gjbarnard