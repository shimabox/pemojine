<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class Google implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'Google';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            Google\SmileysEmotion::class,
            Google\PeopleBody::class,
            Google\Component::class,
            Google\AnimalsNature::class,
            Google\FoodDrink::class,
            Google\TravelPlaces::class,
            Google\Activities::class,
            Google\Objects::class,
            Google\Symbols::class,
            Google\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return Google\EmojiTable::class;
    }
}
