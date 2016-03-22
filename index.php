<?php
/**
 * MVC-ExEngine
 * Default index file, normally you just don't need to modify this file, to add includes, add them in the
 * ApplicationInit method in the config/eemvc.php file, if you are using composer, set
 * $this->ComposerAutoload = true; in the ApplicationInit method, just go there for more information.
 * 
 * QOX Corporation - oss.qox-corp.com/exengine
 *
 * License Information:
    MIT License
    Copyright (c) 2016 QOX Corporation

    Permission is hereby granted, free of charge, to any person obtaining a copy
    of this software and associated documentation files (the "Software"), to deal
    in the Software without restriction, including without limitation the rights
    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    copies of the Software, and to permit persons to whom the Software is
    furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all
    copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
    SOFTWARE.
 */

error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", 1);

# Composer's ExEngine Core will have priority over manually installed ExEngine Core.
if (file_exists('vendor/qoxcorp/exengine-core/ee.php')) {
    include_once('vendor/qoxcorp/exengine-core/ee.php');
} elseif (!file_exists("lib/exengine/ee.php")) { # Try to load manual installation.
	print '<h1>MVC-ExEngine</h1><p>ExEngine framework is not installed, please read the README file in the lib/ folder for more information.</p>';
	exit();
}

require 'config/exengine.php';
require 'lib/exengine/ee.php';
$ee = new \ExEngine\Core([
    "SpecialMode" => "MVCOnly",
    "AutoSession" => false
    ], $ee_config);
require 'config/eemvc.php';

$mvc = new \ExEngine\MVC\Index(new \ExEngine\MVC\ApplicationConfig());
$mvc->start();

# Made with <3 in Lima, Perú.