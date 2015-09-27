<?php


namespace pods\storage;


abstract class StorageController { //TODO: might become an interface instead

	public abstract function storeField();

	public abstract function storeFieldSet();

	public abstract function storePod();
}