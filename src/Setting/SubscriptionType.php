<?php
/**
 * OpenFireRestAPI is based entirely on official documentation of the REST API
 * Plugin and you can extend it by following the directives of the documentation
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/nelcoa/PHPOpenFireRestAPI/contributors
 *
 * @author Luca Agnello <lcagnello@gmail.com>
 * @link https://www.igniterealtime.org/projects/openfire/plugins/restapi/readme.html
 */

namespace Nelcoa\OpenFireRestAPI\Setting;

/**
 * Class SubscriptionType
 * @package Nelcoa\OpenFireRestAPI\Setting
 */
class SubscriptionType
{
    /**
     * SubscriptionType of Roster
     */
    const NONE  = 0;
    const TO    = 1;
    const FROM  = 2;
    const BOTH  = 3;

    /**
     * @param $subscriptionType
     * @return bool
     */
    public static function isValid($subscriptionType)
    {
        switch ($subscriptionType) {
            case self::NONE:
            case self::TO:
            case self::FROM:
            case self::BOTH:
                return true;
                break;
            default:
                return false;
            break;
        }
    }
}