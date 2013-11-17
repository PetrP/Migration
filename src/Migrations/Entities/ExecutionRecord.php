<?php
namespace Migrations\Entities;

use DateTime;


/**
 * Entity representing a record about executing a single migration.
 */
class ExecutionRecord
{

	/** @var int */
	public $id;

	/** @var string */
	public $group;

	/** @var string */
	public $filename;

	/** @var string */
	public $checksum;

	/** @var DateTime */
	public $executedAt;

	/** @var bool */
	public $completed;

}
