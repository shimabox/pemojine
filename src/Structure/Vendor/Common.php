<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class Common implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'Common';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            Common\SmileysEmotion::class,
            Common\PeopleBody::class,
            Common\AnimalsNature::class,
            Common\FoodDrink::class,
            Common\TravelPlaces::class,
            Common\Activities::class,
            Common\Objects::class,
            Common\Symbols::class,
            Common\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return Common\EmojiTable::class;
    }
}
