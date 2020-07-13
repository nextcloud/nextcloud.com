<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Api;

/**
 * Files Context
 */
class Files extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'files/images';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'files';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'file';

    /**
     * Changes the file folder to look at
     *
     * @param string $folder [images, assets]
     */
    public function setFolder($folder = 'assets')
    {
        $folder = str_replace('/', '.', $folder);
        $this->endpoint = 'files/'.$folder;
    }

    /**
     * {@inheritdoc}
     */
    public function edit($id, array $parameters, $createIfNotExists = false)
    {
        return $this->actionNotSupported('edit');
    }

    /**
     * @param array $parameters
     *
     * @return array|mixed
     */
    public function create(array $parameters)
    {
        if (!isset($parameters['file'])) {
            throw new \InvalidArgumentException('file must be set in parameters');
        }

        return parent::create($parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function createBatch(array $parameters)
    {
        return $this->actionNotSupported('createBatch');
    }

    /**
     * {@inheritdoc}
     */
    public function editBatch(array $parameters, $createIfNotExists = false)
    {
        return $this->actionNotSupported('editBatch');
    }

    /**
     * {@inheritdoc}
     */
    public function deleteBatch(array $ids)
    {
        return $this->actionNotSupported('deleteBatch');
    }
}
