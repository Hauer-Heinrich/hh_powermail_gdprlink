<?php
namespace HauerHeinrich\HhPowermailGdprlink\Domain\Model;

/**
* Class Field
* @package HauerHeinrich\HhPowermailGdprlink\Domain\Model
*/
class Field extends \In2code\Powermail\Domain\Model\Field {

    /**
     * dataProtectionAccepted
     *
     * @var string $dataProtectionAccepted
     */
    protected $dataProtectionAccepted;

    /**
     * dataProtectionText
     *
     * @var string $dataProtectionText
     */
    protected $dataProtectionText;

    /**
     * dataProtectionValue
     *
     * @var string $dataProtectionValue
     */
    protected $dataProtectionValue;

    /**
     * @param string $dataProtectionAccepted
     * @return void
     */
    public function setDataProtectionAccepted($dataProtectionAccepted)
    {
        $this->dataProtectionAccepted = $dataProtectionAccepted;
    }

    /**
     * @return string $dataProtectionAccepted
     */
    public function getDataProtectionAccepted()
    {
        return $this->dataProtectionAccepted;
    }

    /**
     * @param string $dataProtectionText
     * @return void
     */
    public function setDataProtectionText($dataProtectionText)
    {
        $this->dataProtectionText = $dataProtectionText;
    }

    /**
     * @return string $dataProtectionText
     */
    public function getDataProtectionText()
    {
        return $this->dataProtectionText;
    }

    /**
     * @param string $dataProtectionValue
     * @return void
     */
    public function setDataProtectionValue($dataProtectionValue)
    {
        $this->dataProtectionValue = $dataProtectionValue;
    }

    /**
     * @return string $dataProtectionValue
     */
    public function getDataProtectionValue()
    {
        return $this->dataProtectionValue;
    }
}
