<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class Facebook implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'Facebook';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            Facebook\SmileysEmotion::class,
            Facebook\PeopleBody::class,
            Facebook\Component::class,
            Facebook\AnimalsNature::class,
            Facebook\FoodDrink::class,
            Facebook\TravelPlaces::class,
            Facebook\Activities::class,
            Facebook\Objects::class,
            Facebook\Symbols::class,
            Facebook\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return Facebook\EmojiTable::class;
    }
}
