<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class KDDI implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'KDDI';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            KDDI\SmileysEmotion::class,
            KDDI\PeopleBody::class,
            KDDI\AnimalsNature::class,
            KDDI\FoodDrink::class,
            KDDI\TravelPlaces::class,
            KDDI\Activities::class,
            KDDI\Objects::class,
            KDDI\Symbols::class,
            KDDI\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return KDDI\EmojiTable::class;
    }
}
