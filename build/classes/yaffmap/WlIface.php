<?php



/**
 * Skeleton subclass for representing a row from the 'ffmap_wlIface' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.ffmap
 */
class WlIface extends BaseWlIface {

	public static function createDummy(WlDevice $wlDevice, AddrMap $addrMap){
		$dummyWlInterface = new WlIface();
		$dummyWlInterface->setAddrMap($addrMap);
		$dummyWlInterface->setWlDevice($wlDevice);
		$dummyWlInterface->setIsDummy(1);
		$dummyWlInterface->save();
		return $dummyWlInterface;
	}
} // WlIface