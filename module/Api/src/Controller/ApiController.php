<?php

namespace Api\Controller;

use Application\PartyAppLib\ApiRestfullController;
use Zend\View\Model\JsonModel;

class ApiController extends ApiRestfullController
{
    //Api http function here
    public function getList()
    {
        return new JsonModel(array('status' => 1));
    }

    public function get()
    {
        return new JsonModel(array('status' => 1));
    }

    public function create($data)
    {
        return new JsonModel(array('status' => 1));
    }

    public function update($id, $data)
    {
        return new JsonModel(array('status' => 1));
    }

    public function delete($id)
    {
        return new JsonModel(array('status' => 1));
    }
}