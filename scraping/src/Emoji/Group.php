<?php

namespace SMB\Pemojine\Scraping\Emoji;

/**
 * 
 */
class Group
{
    /**
     *
     * @var string
     */
    public $shortName = '';

    /**
     *
     * @var array
     */
    public $shortNameAliases = [];

    /**
     *
     * @var boolean
     */
    public $validWithApple = true;

    /**
     *
     * @var boolean
     */
    public $validWithGoogle = true;

    /**
     *
     * @var boolean
     */
    public $validWithTwitter = true;

    /**
     *
     * @var boolean
     */
    public $validWithEmojiOne = true;

    /**
     *
     * @var boolean
     */
    public $validWithFacebook = true;

    /**
     *
     * @var boolean
     */
    public $validWithSamsung = true;

    /**
     *
     * @var boolean
     */
    public $validWithWindows = true;

    /**
     *
     * @var boolean
     */
    public $validWithGMail = true;

    /**
     *
     * @var boolean
     */
    public $validWithSoftBank = true;

    /**
     *
     * @var boolean
     */
    public $validWithDoCoMo = true;

    /**
     *
     * @var boolean
     */
    public $validWithKDDI = true;

    /**
     *
     * @var array
     */
    private $codes = [];

    /**
     *
     * @param string $code
     * @return void
     */
    public function addCode($code)
    {
        $this->codes[] = $code;
    }

    /**
     *
     * @return \Generator
     */
    public function getCodes()
    {
        foreach ($this->codes as $code) {
            yield $code;
        }
    }

    /**
     * 
     * @return void
     */
    public function notSupport()
    {
        $this->validWithApple    = false;
        $this->validWithGoogle   = false;
        $this->validWithTwitter  = false;
        $this->validWithEmojiOne = false;
        $this->validWithFacebook = false;
        $this->validWithSamsung  = false;
        $this->validWithWindows  = false;
        $this->validWithGMail    = false;
        $this->validWithSoftBank = false;
        $this->validWithDoCoMo   = false;
        $this->validWithKDDI     = false;
    }

    /**
     * 
     * @return boolean
     */
    public function isEvenOneSupported()
    {
        return $this->validWithApple
               || $this->validWithGoogle 
               || $this->validWithTwitter 
               || $this->validWithEmojiOne 
               || $this->validWithFacebook 
               || $this->validWithSamsung 
               || $this->validWithWindows 
               || $this->validWithGMail 
               || $this->validWithSoftBank 
               || $this->validWithDoCoMo 
               || $this->validWithKDDI
               ;
    }

    /**
     * 
     * @return boolean
     */
    public function isAllSupported()
    {
        return $this->validWithApple
               && $this->validWithGoogle 
               && $this->validWithTwitter 
               && $this->validWithEmojiOne 
               && $this->validWithFacebook 
               && $this->validWithSamsung 
               && $this->validWithWindows 
               && $this->validWithGMail 
               && $this->validWithSoftBank 
               && $this->validWithDoCoMo 
               && $this->validWithKDDI
               ;
    }
}
