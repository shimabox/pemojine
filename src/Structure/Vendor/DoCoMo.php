<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class DoCoMo implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'DoCoMo';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            DoCoMo\SmileysEmotion::class,
            DoCoMo\PeopleBody::class,
            DoCoMo\AnimalsNature::class,
            DoCoMo\FoodDrink::class,
            DoCoMo\TravelPlaces::class,
            DoCoMo\Activities::class,
            DoCoMo\Objects::class,
            DoCoMo\Symbols::class,
            DoCoMo\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return DoCoMo\EmojiTable::class;
    }
}
