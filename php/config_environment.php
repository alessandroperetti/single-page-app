<?php
/**
 *
 * Set the environment of the application- Develop, Staging or Live*/
namespace apere;

//define("ENVIORNMENT", "LIVE");
//define("ENVIORNMENT", "STAGE");
define("ENVIORNMENT", "DEVE");

if(ENVIORNMENT == "LIVE"){
  error_reporting (0);
}else{
  error_reporting(E_ALL);
}
