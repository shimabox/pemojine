
namespace SMB\Pemojine\Config;

/**
 *
 */
class EmojiTable
{
    /**
     *
     * {{ $phpdocVar }} array
     */
    public static $all = @yield('emojiTable')

    /**
     *
     * {{ $phpdocVar }} array
     */
    public static $mappingOfShortName = @yield('mappingOfShortName')

    /**
     *
     * {{ $phpdocVar }} array
     */
    public static $unicodeToShortNames = @yield('unicodeToShortNames')
}
