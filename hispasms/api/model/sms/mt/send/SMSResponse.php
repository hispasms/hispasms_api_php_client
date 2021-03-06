<?php
namespace hispasms\api\model\sms\mt\send;

/**
 * This is a generated class and is not intended for modification!
 */
class SMSResponse implements \JsonSerializable
{
    private $bulkId;
    /**
     * @var \hispasms\api\model\sms\mt\send\SMSResponseDetails[]
     */
    private $messages;


    public function setBulkId($bulkId)
    {
        $this->bulkId = $bulkId;
    }
    public function getBulkId()
    {
        return $this->bulkId;
    }

    /**
     * @param \hispasms\api\model\sms\mt\send\SMSResponseDetails[] $messages
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    /**
     * @return \hispasms\api\model\sms\mt\send\SMSResponseDetails[]
     */
    public function getMessages()
    {
        return $this->messages;
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