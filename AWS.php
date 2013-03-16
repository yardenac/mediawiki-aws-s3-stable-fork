<?php

/**
 * Implements the AWS extension for MediaWiki.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'AWS',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:AWS',
	'version'        => '0.5',
	'author'         => 'Tyler Romeo',
	'descriptionmsg' => 'aws-desc'
);

/**
 * Credentials to use to connect to AWS
 */
$wgAWSCredentials = array(
	'key' => false,
	'secret' => false
);

/**
 * Region of AWS to connect to
 */
$wgAWSRegion = false;

$wgExtensionMessagesFiles['AWS'] = __DIR__ . '/AWS.i18n.php';

require_once( __DIR__ . '/vendor/autoload.php' );