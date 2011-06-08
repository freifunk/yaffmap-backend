<?php



/**
 * Skeleton subclass for representing a row from the 'yaffmap_agentRelease' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.yaffmap
 */
class AgentRelease extends BaseAgentRelease {
	
	/**
	 * @return sAgentRelease
	 */
	public function getSoapClass(){
		$ar = new sAgentRelease();
		$ar->release = $this->getRelease();
		$ar->subRelease = $this->getSubRelease();
		$ar->releaseDate = $this->getReleaseDate();
		$ar->tree = $this->getUpgradeTree();
		$ar->version = $this->getVersion();
		$ar->agent = base64_encode(stream_get_contents($this->getAgent()));
		$ar->agentSize = $this->getAgentSize();
		return $ar;
	}
} // AgentRelease
