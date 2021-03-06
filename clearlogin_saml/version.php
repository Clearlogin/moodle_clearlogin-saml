<?php
/* * * * * * * * * *  The Clearlogin SAML 2.0 authentication module for Moodle  * * * * * * * * *
 *
 * version.php - Code fragment to define the version of clearlogin_saml
 *
 * @originalauthor Onelogin, Inc
 * @updatedauthor Clearlogin, Inc
 * @author Harrison Horowitz, Sixto Martin, Dean Galvin
 * @version 3.0
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package auth/clearlogin_saml
 * @requires XMLSecLibs v1.2.2
 *
 * @copyright 2011-2014 Onelogin.com
 *
 * @description
 * Connects to Moodle, builds the configuration, discovers SAML status, and handles the login process accordingly.
 *
 * Security Assertion Markup Language (SAML) is a standard for logging users into applications based
 * on their session in another context. This has significant advantages over logging in using a
 * username/password: no need to type in credentials, no need to remember and renew password, no weak
 * passwords etc.
 *
 * Most companies already know the identity of users because they are logged into their Active Directory
 * domain or intranet. It is natural to use this information to log users into other applications as well
 * such as web-based application, and one of the more elegant ways of doing this by using SAML.
 *
 * SAML is very powerful and flexible, but the specification can be quite a handful. Now Clearlogin is
 * releasing this SAML toolkit for your Moodle application to enable you to integrate SAML in seconds
 * instead of months. We’ve filtered the signal from the noise and come up with a simple setup that will
 * work for most applications out there.
 *
 */

	$plugin->version   = 2017101801;  // The current module version (Date: YYYYMMDDXX)
	$plugin->requires  = 2013012801;
	$plugin->cron      = 0;           // Period for cron to check this module (secs)
	$plugin->component = 'auth_clearlogin_saml';

?>
