<?php



/**
 * Skeleton subclass for performing query and update operations on the 'ffmap_rfLink' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.ffmap
 */
class RfLinkQuery extends BaseRfLinkQuery {

	/**
	 * delete RfLinks that dont have been updated since $nbHours hours
	 * @param integer $nbHours
	 * @return number of deleted rows
	 */
	public static function deleteOld($nbHours = 12){
		return RfLinkQuery::create()->filterByUpdatedAt(time() - $nbHours * 60 * 60, ModelCriteria::LESS_THAN)->delete();
	}
} // RfLinkQuery
