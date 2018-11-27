<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class Twitter implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'Twitter';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            Twitter\SmileysEmotion::class,
            Twitter\PeopleBody::class,
            Twitter\Component::class,
            Twitter\AnimalsNature::class,
            Twitter\FoodDrink::class,
            Twitter\TravelPlaces::class,
            Twitter\Activities::class,
            Twitter\Objects::class,
            Twitter\Symbols::class,
            Twitter\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return Twitter\EmojiTable::class;
    }
}
