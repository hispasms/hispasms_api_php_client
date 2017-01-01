<?php
namespace hispasms\api\model\nc\query;

/**
 * This is a generated class and is not intended for modification!
 */
class NumberContextResponseDetails implements \JsonSerializable
{
    private $ported;
    private $roaming;
    private $mccMnc;
    /**
     * @var \hispasms\api\model\nc\Network
     */
    private $roamingNetwork;
    /**
     * @var \hispasms\api\model\nc\Network
     */
    private $portedNetwork;
    private $to;
    private $imsi;
    private $servingMSC;
    /**
     * @var \hispasms\api\model\Error
     */
    private $error;
    /**
     * @var \hispasms\api\model\nc\Network
     */
    private $originalNetwork;
    /**
     * @var \hispasms\api\model\Status
     */
    private $status;


    public function setPorted($ported)
    {
        $this->ported = $ported;
    }
    public function isPorted()
    {
        return $this->ported;
    }

    public function setRoaming($roaming)
    {
        $this->roaming = $roaming;
    }
    public function isRoaming()
    {
        return $this->roaming;
    }

    public function setMccMnc($mccMnc)
    {
        $this->mccMnc = $mccMnc;
    }
    public function getMccMnc()
    {
        return $this->mccMnc;
    }

    /**
     * @param \hispasms\api\model\nc\Network $roamingNetwork
     */
    public function setRoamingNetwork($roamingNetwork)
    {
        $this->roamingNetwork = $roamingNetwork;
    }

    /**
     * @return \hispasms\api\model\nc\Network
     */
    public function getRoamingNetwork()
    {
        return $this->roamingNetwork;
    }

    /**
     * @param \hispasms\api\model\nc\Network $portedNetwork
     */
    public function setPortedNetwork($portedNetwork)
    {
        $this->portedNetwork = $portedNetwork;
    }

    /**
     * @return \hispasms\api\model\nc\Network
     */
    public function getPortedNetwork()
    {
        return $this->portedNetwork;
    }

    public function setTo($to)
    {
        $this->to = $to;
    }
    public function getTo()
    {
        return $this->to;
    }

    public function setImsi($imsi)
    {
        $this->imsi = $imsi;
    }
    public function getImsi()
    {
        return $this->imsi;
    }

    public function setServingMSC($servingMSC)
    {
        $this->servingMSC = $servingMSC;
    }
    public function getServingMSC()
    {
        return $this->servingMSC;
    }

    /**
     * @param \hispasms\api\model\Error $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }

    /**
     * @return \hispasms\api\model\Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param \hispasms\api\model\nc\Network $originalNetwork
     */
    public function setOriginalNetwork($originalNetwork)
    {
        $this->originalNetwork = $originalNetwork;
    }

    /**
     * @return \hispasms\api\model\nc\Network
     */
    public function getOriginalNetwork()
    {
        return $this->originalNetwork;
    }

    /**
     * @param \hispasms\api\model\Status $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \hispasms\api\model\Status
     */
    public function getStatus()
    {
        return $this->status;
    }


  /**
   * (PHP 5 &gt;= 5.4.0)<br/>
   * Specify data which should be serialized to JSON
   * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
   * @return mixed data which can be serialized by <b>json_encode</b>,
   * which is a value of any type other than a resource.
   */
  function jsonSerialize()
  {
      return get_object_vars($this);
  }
}