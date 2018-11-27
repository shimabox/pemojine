<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class Windows implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'Windows';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            Windows\SmileysEmotion::class,
            Windows\PeopleBody::class,
            Windows\Component::class,
            Windows\AnimalsNature::class,
            Windows\FoodDrink::class,
            Windows\TravelPlaces::class,
            Windows\Activities::class,
            Windows\Objects::class,
            Windows\Symbols::class,
            Windows\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return Windows\EmojiTable::class;
    }
}
