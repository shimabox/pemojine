<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class SoftBank implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'SoftBank';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            SoftBank\SmileysEmotion::class,
            SoftBank\PeopleBody::class,
            SoftBank\AnimalsNature::class,
            SoftBank\FoodDrink::class,
            SoftBank\TravelPlaces::class,
            SoftBank\Activities::class,
            SoftBank\Objects::class,
            SoftBank\Symbols::class,
            SoftBank\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return SoftBank\EmojiTable::class;
    }
}
