<?php
/**
 * Created by PhpStorm.
 * User: Phil
 * Date: 20/02/2017
 * Time: 10:35
 */

namespace Composite;


class ListItem implements ListComponent
{
	private $itemValue;

	public function __construct($itemValue) { }

	public function printList() { }
}