<?php
/**
*
*
* @author     Valericio Carrasco
* @copyright  2022 Valericio Carrasco
* @license    http://www.apache.org/licenses/LICENSE-2.0  Apache License, Version 2.0
* @version    0.0.3
* @link       https://valericio.cl
*
*
* Copyright 2022 Valericio Carrasco
*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
*     http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*
*/

include('MySqlBackup.php');

$arrayDbConf['host'] = '';
$arrayDbConf['user'] = '';
$arrayDbConf['pass'] = '';
$arrayDbConf['name'] = '';

$date          = date("Y-m-d");
$nombreArchivo = 'respaldo_'.$date.'.sql';

try {

  $bck = new MySqlBackupLite($arrayDbConf);
  $bck->backUp();
  $bck->setFileDir('');
  $bck->setFileName($nombreArchivo);
  $bck->saveToFile();

}
catch(Exception $e) {

  echo $e;
}
?>