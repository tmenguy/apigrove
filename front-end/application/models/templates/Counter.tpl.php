<?php
/**
 * Copyright © 2012 Alcatel-Lucent.
 *
 * See the NOTICE file distributed with this work for additional information regarding copyright ownership. Licensed to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the specific language governing permissions and limitations under the License.
 */

/**
 * Template file for Counter class
 *
 * Date: 4/13/12
 *
 */

// This line is just so I can get some type hinting in my IDE
$that = empty($this)?new Counter():$this;
?>
<status><?=$that->status?></status>
<action><?=$that->action?></action>
<warning><?=$that->warning?></warning>
<threshold><?=$that->threshold?></threshold>
