<?php
/**
 * Created by Anushka K R.
 * Dev. Ref: http://www.anushkar.com
 * Dev. Public Profile: https://www.upwork.com/fl/anushkakrajasingha
 * Date: 12/28/2017
 * Time: 7:34 AM
 */
$uri = $_SERVER['REQUEST_URI'];
Header( "HTTP/1.1 301 Moved Permanently" );
Header( "Location: https://familytravel.com.au$uri" );