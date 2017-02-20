<?php
/**
 * Created by PhpStorm.
 * User: Phil
 * Date: 20/02/2017
 * Time: 10:35
 */

namespace Composite;


class ListComposite implements ListComponent
{
	private $listComponents; //use an array or a Collection object
	private $hTag;
	private $listName;

	public function __construct($hTag, $listName) { }

	public function add(ListComponent $component) { }

	public function printList() { }
}
