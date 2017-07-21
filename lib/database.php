<?php
/* 
 * Copyright 2016 Lukas Metzger <developer@lukas-metzger.com>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
try {
    $db = new PDO($config['db_type'].":dbname=".$config['db_name'].";host=".$config['db_host'].";port=".strval($config['db_port']), $config['db_user'], $config['db_password']);
}
catch (PDOException $e) {
    die("Connection to the database failed. There is an error in the database configuration.");
}
