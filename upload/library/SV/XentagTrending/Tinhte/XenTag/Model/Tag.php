<?php

class SV_XentagTrending_Tinhte_XenTag_Model_Tag extends XFCP_SV_XentagTrending_Tinhte_XenTag_Model_Tag
{

    protected function InvalidateTrendingCache()
    {
		$this->getModelFromCache('XenForo_Model_DataRegistry')->set(Tinhte_XenTag_Constants::DATA_REGISTRY_KEY_TRENDING, false);
    }
    
    public function updateTagViews()
    {
        parent::updateTagViews();
        $this->InvalidateTrendingCache();
    }

    public function rebuildTagsCache()
    {
        $ret = parent::rebuildTagsCache();
        $this->InvalidateTrendingCache();
        return $ret;
    }
}