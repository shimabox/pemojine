<?phpnamespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class GMail implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'GMail';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            GMail\SmileysEmotion::class,
            GMail\PeopleBody::class,
            GMail\AnimalsNature::class,
            GMail\FoodDrink::class,
            GMail\TravelPlaces::class,
            GMail\Activities::class,
            GMail\Objects::class,
            GMail\Symbols::class,
            GMail\Flags::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return GMail\EmojiTable::class;
    }
}
