<?php
namespace NormanSeibert\Ldap\Domain\Model\Typo3User;
/**
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 * A copy is found in the textfile GPL.txt and important notices to the license
 * from the author is found in LICENSE.txt distributed with these scripts.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 *
 * @package   ldap
 * @author	  Norman Seibert <seibert@entios.de>
 * @copyright 2013 Norman Seibert
 */

interface UserGroupInterface {
    /**
     *
     * @param string $dn
     * @return \NormanSeibert\Ldap\Domain\Model\Typo3User\UserInterface
     */
    public function setDN($dn);

    /**
     *
     * @return string
     */
    public function getDN();

    /**
     *
     * @param \NormanSeibert\Ldap\Domain\Model\LdapServer\Server $server
     * @return \NormanSeibert\Ldap\Domain\Model\Typo3User\UserInterface
     */
    public function setLdapServer(\NormanSeibert\Ldap\Domain\Model\LdapServer\Server $server);

    /**
     *
     * @return \NormanSeibert\Ldap\Domain\Model\LdapServer\Server
     */
    public function getLdapServer();

    /**
     *
     * @param string $uid
     * @return \NormanSeibert\Ldap\Domain\Model\Typo3User\UserInterface
     */
    public function setServerUid($uid);

    /**
     *
     * @return string
     */
    public function getServerUid();

    /**
     *
     * @param string $run
     * @return \NormanSeibert\Ldap\Domain\Model\Typo3User\UserInterface
     */
    public function setLastRun($run);

    /**
     *
     * @return string
     */
    public function getLastRun();

    /**
     *
     * @return string
     */
    public function getTitle();
    /**
     * Setter for the pid.
     *
     * @param integer|NULL $pid
     * @return void
     */
    public function setPid(int $pid);

    /**
     *
     * @param string $attribute
     * @return string
     */
    public function _getProperty(string $attribute);
} 