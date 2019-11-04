<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class JoyPixels implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'JoyPixels';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            JoyPixels\SmileysEmotion::class,
            JoyPixels\PeopleBody::class,
            JoyPixels\Component::class,
            JoyPixels\AnimalsNature::class,
            JoyPixels\FoodDrink::class,
            JoyPixels\TravelPlaces::class,
            JoyPixels\Activities::class,
            JoyPixels\Objects::class,
            JoyPixels\Symbols::class,
            JoyPixels\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return JoyPixels\EmojiTable::class;
    }
}
