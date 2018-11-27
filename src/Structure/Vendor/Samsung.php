<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class Samsung implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'Samsung';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            Samsung\SmileysEmotion::class,
            Samsung\PeopleBody::class,
            Samsung\Component::class,
            Samsung\AnimalsNature::class,
            Samsung\FoodDrink::class,
            Samsung\TravelPlaces::class,
            Samsung\Activities::class,
            Samsung\Objects::class,
            Samsung\Symbols::class,
            Samsung\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return Samsung\EmojiTable::class;
    }
}
