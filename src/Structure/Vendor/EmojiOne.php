<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class EmojiOne implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'EmojiOne';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            EmojiOne\SmileysEmotion::class,
            EmojiOne\PeopleBody::class,
            EmojiOne\Component::class,
            EmojiOne\AnimalsNature::class,
            EmojiOne\FoodDrink::class,
            EmojiOne\TravelPlaces::class,
            EmojiOne\Activities::class,
            EmojiOne\Objects::class,
            EmojiOne\Symbols::class,
            EmojiOne\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return EmojiOne\EmojiTable::class;
    }
}
