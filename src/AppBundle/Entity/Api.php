<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Api
 *
 * @ORM\Table(name="api")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ApiRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Api
{
    /**
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps()
    {
        $this->setUpdated(new \DateTime('now'));

        if ($this->getCreated() == null) {
            $this->setCreated(new \DateTime('now'));
        }
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="endpointName", type="string", length=255)
     */
    private $endpointName;

    /**
     * @var string
     *
     * @ORM\Column(name="endpointUrl", type="string", length=255)
     */
    private $endpointUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="endpointMethod", type="string", length=255)
     */
    private $endpointMethod;

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="request", type="text")
     */
    private $request;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="text")
     */
    private $response;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text")
     */
    private $note;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Project",inversedBy="api")
     */
    public $project;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set endpointName
     *
     * @param string $endpointName
     *
     * @return Api
     */
    public function setEndpointName($endpointName)
    {
        $this->endpointName = $endpointName;

        return $this;
    }

    /**
     * Get endpointName
     *
     * @return string
     */
    public function getEndpointName()
    {
        return $this->endpointName;
    }

    /**
     * Set endpointUrl
     *
     * @param string $endpointUrl
     *
     * @return Api
     */
    public function setEndpointUrl($endpointUrl)
    {
        $this->endpointUrl = $endpointUrl;

        return $this;
    }

    /**
     * Get endpointUrl
     *
     * @return string
     */
    public function getEndpointUrl()
    {
        return $this->endpointUrl;
    }

    /**
     * Set endpointMethod
     *
     * @param string $endpointMethod
     *
     * @return Api
     */
    public function setEndpointMethod($endpointMethod)
    {
        $this->endpointMethod = $endpointMethod;

        return $this;
    }

    /**
     * Get endpointMethod
     *
     * @return string
     */
    public function getEndpointMethod()
    {
        return $this->endpointMethod;
    }

    /**
     * Set request
     *
     * @param string $request
     *
     * @return Api
     */
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get request
     *
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set response
     *
     * @param string $response
     *
     * @return Api
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Api
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Api
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Api
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}

