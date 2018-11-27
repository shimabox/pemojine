<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class Apple implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'Apple';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            Apple\SmileysEmotion::class,
            Apple\PeopleBody::class,
            Apple\Component::class,
            Apple\AnimalsNature::class,
            Apple\FoodDrink::class,
            Apple\TravelPlaces::class,
            Apple\Activities::class,
            Apple\Objects::class,
            Apple\Symbols::class,
            Apple\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return Apple\EmojiTable::class;
    }
}
