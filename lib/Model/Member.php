<?php
/**
 * Circles - bring cloud-users closer
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Maxence Lange <maxence@pontapreta.net>
 * @copyright 2017
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Circles\Model;

class Member {

	private $groupid;
	private $userid;
	private $level;
	private $status;
	private $creation;

	public function __construct() {

	}


	public function setGroupId($groupid) {
		$this->groupid = $groupid;
	}

	public function getGroupId() {
		return $this->userid;
	}


	public function setUserId($userid) {
		$this->userid = $userid;
	}

	public function getUserId() {
		return $this->userid;
	}


	public function setLevel($level) {
		$this->level = $level;
	}

	public function getLevel() {
		return $this->level;
	}


	public function setStatus($status) {
		$this->status = $status;
	}

	public function getStatus() {
		return $this->status;
	}


	public function setCreation($creation) {
		$this->creation = $creation;
	}

	public function getCreation() {
		return $this->creation;
	}


	public function toString() {
		return "toString ?";
	}
}


