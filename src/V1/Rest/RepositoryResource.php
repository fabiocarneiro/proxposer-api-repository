<?php

namespace ZFBrasil\Proxposer\Api\Repository\V1\Rest;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use ZFBrasil\RepositoryManager\DTO\Repository;
use ZFBrasil\RepositoryManager\Model\SelectableRepository;
use ZFBrasil\RepositoryManager\Service\RepositoryManager;

class RepositoryResource extends AbstractResourceListener
{
    /**
     * @var RepositoryManager
     */
    protected $repositoryManager;

    /**
     * @param RepositoryManager $repositoryManager
     */
    public function __construct(RepositoryManager $repositoryManager)
    {
        $this->repositoryManager = $repositoryManager;
    }

    /**
     * Create a resource
     *
     * @param  Repository $data
     *
     * @return ApiProblem|SelectableRepository
     */
    public function create($data)
    {
        return $this->repositoryManager->addRepository(
            $data
        );
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     *
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        return new ApiProblem(405,
            'The DELETE method has not been defined for individual resources');
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     *
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405,
            'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     *
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        return new ApiProblem(405,
            'The GET method has not been defined for individual resources');
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     *
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = [])
    {
        return new ApiProblem(405,
            'The GET method has not been defined for collections');
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     *
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return new ApiProblem(405,
            'The PATCH method has not been defined for individual resources');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     *
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405,
            'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     *
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        return new ApiProblem(405,
            'The PUT method has not been defined for individual resources');
    }
}
