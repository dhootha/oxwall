<?php

/**
 * EXHIBIT A. Common Public Attribution License Version 1.0
 * The contents of this file are subject to the Common Public Attribution License Version 1.0 (the “License”);
 * you may not use this file except in compliance with the License. You may obtain a copy of the License at
 * http://www.oxwall.org/license. The License is based on the Mozilla Public License Version 1.1
 * but Sections 14 and 15 have been added to cover use of software over a computer network and provide for
 * limited attribution for the Original Developer. In addition, Exhibit A has been modified to be consistent
 * with Exhibit B. Software distributed under the License is distributed on an “AS IS” basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for the specific language
 * governing rights and limitations under the License. The Original Code is Oxwall software.
 * The Initial Developer of the Original Code is Oxwall Foundation (http://www.oxwall.org/foundation).
 * All portions of the code written by Oxwall Foundation are Copyright (c) 2011. All Rights Reserved.

 * EXHIBIT B. Attribution Information
 * Attribution Copyright Notice: Copyright 2011 Oxwall Foundation. All rights reserved.
 * Attribution Phrase (not exceeding 10 words): Powered by Oxwall community software
 * Attribution URL: http://www.oxwall.org/
 * Graphic Image as provided in the Covered Code.
 * Display of Attribution Information is required in Larger Works which are defined in the CPAL as a work
 * which combines Covered Code or portions thereof with code not governed by the terms of the CPAL.
 */

/**
 * Data Transfer Object for `base_flag` table
 *
 * @author Aybat Duyshokov <duyshokov@gmail.com>
 * @package ow_system_plugins.base.bol
 * @since 1.0
 */
class BOL_Flag extends OW_Entity
{
    public $type,
    $entityId,
    $userId,
    $reason,
    $title,
    $url,
    $timestamp,
    $langKey;

    public function __construct()
    {
        $this->timestamp = time();
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     *
     * @return int
     */
    public function setType( $type )
    {
        $this->type = $type;

        return $this;
    }

    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     *
     * @return int
     */
    public function setEntityId( $entityId )
    {
        $this->entityId = $entityId;

        return $this;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    /**
     *
     * @return unknown_type
     */
    public function setUserId( $userId )
    {
        $this->userId = $userId;

        return $this;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     *
     * @return unknown_type
     */
    public function setTimestamp( $timestamp )
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getReason()
    {
        return $this->reason;
    }

    public function setReason( $reason )
    {
        $this->reason = $reason;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     *
     * @return string
     */
    public function setTitle( $title )
    {
        $this->title = $title;

        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

    /**
     *
     * @return string
     */
    public function setUrl( $url )
    {
        $this->url = $url;

        return $this;
    }

    public function getLangKey()
    {
        return $this->langKey;
    }

    /**
     *
     * @return unknown_type
     */
    public function setLangKey( $langKey )
    {
        $this->langKey = $langKey;

        return $this;
    }
}