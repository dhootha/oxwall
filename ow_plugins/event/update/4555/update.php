<?php

/**
 * This software is intended for use with Oxwall Free Community Software http://www.oxwall.org/ and is
 * licensed under The BSD license.

 * ---
 * Copyright (c) 2011, Oxwall Foundation
 * All rights reserved.

 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the
 * following conditions are met:
 *
 *  - Redistributions of source code must retain the above copyright notice, this list of conditions and
 *  the following disclaimer.
 *
 *  - Redistributions in binary form must reproduce the above copyright notice, this list of conditions and
 *  the following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 *  - Neither the name of the Oxwall Foundation nor the names of its contributors may be used to endorse or promote products
 *  derived from this software without specific prior written permission.

 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

$errors = array();

try
{
    Updater::getDbo()->query("ALTER TABLE `" . OW_DB_PREFIX . "event_item` ADD `endDateFlag` BOOL NOT NULL DEFAULT '1'");
}
catch( Exception $e )
{
    $errors[] = $e;
}

try
{
    Updater::getDbo()->query("ALTER TABLE `" . OW_DB_PREFIX . "event_item` ADD `startTimeDisabled` BOOL NOT NULL DEFAULT '0'");
}
catch( Exception $e )
{
    $errors[] = $e;
}

try
{
    Updater::getDbo()->query("ALTER TABLE `" . OW_DB_PREFIX . "event_item` ADD `endTimeDisabled` BOOL NOT NULL DEFAULT '0'");
}
catch( Exception $e )
{
    $errors[] = $e;
}


$sql = "UPDATE `".OW_DB_PREFIX."base_comment_entity` SET `pluginKey` = :pluginKey WHERE `entityType` = :entityType";

try
{
    Updater::getDbo()->query($sql, array('pluginKey' => 'event', 'entityType' => 'event'));
}
catch( Exception $e )
{
    $errors[] = $e;
}

Updater::getLanguageService()->importPrefixFromZip(dirname(__FILE__) . DS . 'langs.zip', 'event');

    @mkdir( OW_DIR_STATIC_PLUGIN . 'event' . DS, 0777  );
    @mkdir( OW_DIR_STATIC_PLUGIN . 'event' . DS . 'js' . DS, 0777  );

    @copy( OW_DIR_PLUGIN . 'event' . DS . 'static' .DS . 'js' . DS . 'event.js', OW_DIR_STATIC_PLUGIN . 'event' . DS . 'js' . DS . 'event.js');

