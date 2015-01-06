<?php

class SV_XentagTrending_XenForo_ControllerPublic_Forum extends XFCP_SV_XentagTrending_XenForo_ControllerPublic_Forum
{
    public function actionIndex()
    {
        $response = parent::actionIndex();
        $tagModel = $this->getModelFromCache('Tinhte_XenTag_Model_Tag');
        $tags = $tagModel->getTrendingFromCache();
        $tagModel->calculateCloudLevel($tags);
        $response->params['tags'] = $tags;
        return $response;
    }
}